import { registerBlockType } from "@wordpress/blocks";
import { edit } from "./edit";
import { save } from "./save";

registerBlockType('btgw2019/btn-black-transparent', {
    title: 'Botão Preto Transparente',
    category: 'layout',
    icon: 'editor-removeformatting',

    attributes: {
        url: {
            type: 'string',
        },
        content: {
            type: 'string',
        }
    },

    edit,

    save,
});
