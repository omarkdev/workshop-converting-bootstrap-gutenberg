import { registerBlockType } from "@wordpress/blocks";
import { edit } from './edit';
import { save } from './save';

registerBlockType('btgw2019/exmaple', {
    title: 'Exemplo',
    category: 'common',
    icon: 'smiley',

    edit,
    save,
});
