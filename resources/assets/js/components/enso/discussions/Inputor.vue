<template>

    <div>
        <input class="input control is-large message-title"
            v-model="message.title"
            :placeholder="__('Title...')"
            v-if="title">
        <quill-editor :options="options"
            v-model="message.body"/>
        <hr>
        <button class="button is-rounded"
            @click="$emit('cancel')">
            <span>{{ __('Cancel') }}</span>
            <span class="icon is-small">
                <fa icon="ban"/>
            </span>
        </button>
        <button class="button is-rounded is-success"
            @click="save"
            v-if="filled">
            <span v-if="message.id">
                {{ __('Update') }}
            </span>
            <span v-else>
                {{ __('Post') }}
            </span>
            <span class="icon is-small">
                <fa icon="database"/>
            </span>
        </button>
    </div>

</template>

<script>

import 'quill/dist/quill.core.css';
import 'quill/dist/quill.snow.css';

import { quillEditor } from 'vue-quill-editor';
import fontawesome from '@fortawesome/fontawesome';
import { faDatabase, faBan } from '@fortawesome/fontawesome-free-solid/shakable.es';

import './mention/mention';
import './mention/mention.scss';

fontawesome.library.add(faDatabase, faBan);

export default {
    name: 'Inputor',

    components: { quillEditor },

    props: {
        title: {
            type: Boolean,
            default: false,
        },
        attachments: {
            type: Boolean,
            default: false,
        },
        placeholder: {
            type: String,
            required: true,
        },
        message: {
            type: Object,
            required: true,
        },
    },

    data() {
        return {
            tribute: null,
            query: null,
            users: [],
            tagged: [],
            options: {
                theme: 'snow',
                placeholder: this.__(this.placeholder),
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'strike'],
                        this.attachments
                            ? ['blockquote', 'code-block', 'image', 'link']
                            : ['blockquote', 'code-block', 'link'],
                        [{ header: 1 }, { header: 2 }],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        [{ align: [] }],
                        [{ color: [] }, { background: [] }, 'clean'],
                    ],
                    mention: {
                        template: item => this.template(item),
                    },
                },
            },
        };
    },

    computed: {
        filled() {
            return (this.title
                ? this.message.title
                    && this.message.title.trim().length > 3
                : true)
                && this.message.body
                && this.message.body.trim().length > 10;
        },
    },

    methods: {
        save() {
            if (this.message.id) {
                this.$emit('update', this.taggedUsers());
                return;
            }

            this.$emit('store', this.taggedUsers());
        },
        tag(user) {
            if (!this.tagged.find(({ id }) => id === user.id)) {
                this.tagged.push(user);
            }
        },
        taggedUsers() {
            return this.tagged.filter(user =>
                this.message.body.indexOf(this.template(user)) > 0);
        },
        upload(file, Editor, cursorLocation, resetUploader) {
            const formData = new FormData();
            formData.append('attachment', file);

            axios.post(route('core.discussions.upload'), formData)
                .then(({ data }) => {
                    Editor.insertEmbed(
                        cursorLocation,
                        'image',
                        route('core.discussions.showAttachment', data.id),
                    );

                    resetUploader();
                }).catch(error => this.handleError(error));
        },
        avatar(avatarId) {
            return route('core.avatars.show', avatarId);
        },
        template(user) {
            return `<img src="${route('core.avatars.show', user.avatarId)}"> ${user.fullName}`;
        },
    },
};

</script>

<style lang="scss">

    .message-title {
        border: unset;
        box-shadow: unset;
        font-weight: bold;

        &:focus {
            box-shadow: unset;
        }
    }

    .quill-editor {
        .ql-toolbar.ql-snow {
            border-left: unset;
            border-right: unset;
            padding: 1rem;
        }

        .ql-container.ql-snow {
            height: unset;
            border: unset;
            min-height: 200px;
            font-size: unset;

            .ql-editor {
                height: unset;

                img {
            width: 1.4rem;
            height: 1.4rem;
            margin-bottom: -0.3rem;
            border-radius: 290486px;
        }
            }

            .ql-editor.ql-blank {
                height: unset;
            }
        }
    }

</style>
