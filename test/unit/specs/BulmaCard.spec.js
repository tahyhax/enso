import { shallow } from 'vue-test-utils';
// import sinon from 'sinon';
import { expect } from 'chai';
import VueSelect from '../../../resources/assets/js/components/enso/select/VueSelect.vue';

describe('VueSelect.vue', () => {
    it('is called bulma-card', () => {
        // init the test
        const wrapper = shallow(VueSelect);

        // assert result
        expect(wrapper.name()).to.equal('bulma-card');
    });

    it('has-card-class', () => {
        const wrapper = shallow(VueSelect);

        expect(wrapper.classes()).to.contain('card');
    });

    it('has-message-set', () => {
        const wrapper = shallow(VueSelect, {
            propsData: {
                content: 'Hello World',
            },
        });

        // assert result
        expect(wrapper.text('Hello World'));
    });
});
