import { registerBlockType } from "@wordpress/blocks";
import { edit } from './edit';
import { save } from './save';

registerBlockType('btgw2019/call-action-video-play', {
    title: 'Call Action: Video Play',
    category: 'widgets',
    icon: 'format-video',

    attributes: {
        url: {
            type: 'string',
        },
        backgroundImage: {
            type: 'object',
            default: {},
        },
    },

    edit,

    save,
});
