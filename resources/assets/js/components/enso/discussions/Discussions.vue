<template>

    <info-box class="is-info">
        <div class="columns is-centered">
            <div class="column is-11-desktop">
                <inputor class="animated fadeIn"
                    :message="discussion"
                    placeholder="Share your idea..."
                    title
                    type="discussion"
                    @store="store()"
                    @update="update()"
                    @cancel="
                        inputor = false;
                        discussion = discussion.id ? discussion : null
                    " v-if="inputor"/>
                <discussion class="animated fadeIn"
                    :discussion="discussion"
                    @edit="inputor = true"
                    @back="discussion = null; get()"
                    @delete="destroy()"
                    v-else-if="discussion"/>
                <div v-else>
                    <div slot="title"
                        class="columns is-mobile is-multiline animated fadeIn header">
                        <div class="column is-3-desktop is-4-mobile">
                            <button class="button is-rounded is-success"
                                @click="discussion = factory(); inputor = true;">
                                <span class="icon is-small">
                                    <fa icon="plus"/>
                                </span>
                                <span>
                                    {{ __('New Topic') }}
                                </span>
                            </button>
                        </div>
                        <div class="column is-8-mobile">
                            <h5 class="title is-5 has-text-centered">
                                {{ __('Discussions') }}
                            </h5>
                        </div>
                        <div class="column is-3-desktop is-12-mobile">
                            <p class="control has-icons-left">
                                <input type="search"
                                    class="input is-small is-rounded"
                                    v-model="query"
                                    @input="$emit('query-update', query)">
                                <span class="icon is-small is-left">
                                    <fa icon="search"/>
                                </span>
                            </p>
                        </div>
                    </div>
                    <discussion-preview class="clickable"
                        v-for="(topic, index) in discussions"
                        :discussion="topic"
                        :last="index === discussions.length - 1"
                        :key="index"
                        @click.native="discussion = topic"/>
                </div>
            </div>
        </div>
    </info-box>

</template>

<script>

import fontawesome from '@fortawesome/fontawesome';
import { faPlus } from '@fortawesome/fontawesome-free-solid/shakable.es';
import InfoBox from './../bulma/InfoBox.vue';
import Discussion from './Discussion.vue';
import DiscussionPreview from './DiscussionPreview.vue';
import Inputor from './Inputor.vue';

fontawesome.library.add(faPlus);

export default {
    name: 'Discussions',

    components: {
        InfoBox, Discussion, DiscussionPreview, Inputor,
    },

    props: {
        discussableId: {
            type: Number,
            required: true,
        },
        discussableType: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            query: null,
            inputor: false,
            discussion: null,
            discussions: [],
            loading: false,
        };
    },

    created() {
        this.get();
    },

    methods: {
        get() {
            this.loading = true;

            axios.get(route('core.discussions.index'), {
                params: {
                    discussable_id: this.discussableId,
                    discussable_type: this.discussableType,
                },
            }).then(({ data }) => {
                this.discussions = data;
                this.loading = false;

                if (!this.discussions.length) {
                    this.discussion = this.factory();
                }
            }).catch(error => this.handleError(error));
        },
        store() {
            axios.post(route('core.discussions.store'), this.discussion)
                .then(({ data }) => {
                    this.discussion = data;
                    this.discussions.unshift(this.discussion);
                    this.inputor = false;
                }).catch(error => this.handleError(error));
        },
        update() {
            axios.patch(
                route('core.discussions.update', this.discussion.id),
                this.discussion,
            )
                .then(() => (this.inputor = false))
                .catch(error => this.handleError(error));
        },
        destroy() {
            axios.delete(route('core.discussions.destroy', this.discussion.id))
                .then(() => {
                    const index = this.discussions.findIndex(({ id }) => id === this.discussion.id);
                    this.discussions.splice(index, 1);
                    this.discussion = null;
                    this.get();
                }).catch(error => this.handleError(error));
        },
        factory() {
            return {
                id: null,
                discussable_id: this.discussableId,
                discussable_type: this.discussableType,
                title: null,
                body: null,
            };
        },
    },
};

</script>

<style lang="scss" scoped>

    .header {
        border-bottom: 2px solid black;
        margin-bottom: 2rem;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
    }

    .clickable {
        cursor: pointer;
    }

</style>
