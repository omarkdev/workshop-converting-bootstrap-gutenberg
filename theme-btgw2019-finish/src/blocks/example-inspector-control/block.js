import { registerBlockType } from "@wordpress/blocks";
import { edit } from "./edit";
import { save } from "./save";

registerBlockType('btgw2019/example-inspector-control', {
    title: 'Exemplo com Controle',
    icon: 'smiley',
    category: 'common',

    attributes: {
        name: {
            type: 'string',
        }
    },

    edit,
    save,
});
