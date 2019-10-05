import { registerBlockType } from "@wordpress/blocks";
import { edit } from "./edit";
import { save } from "./save";
import { OPTIONS } from "./options";

registerBlockType('btgw2019/icon-bordered-rounded', {
    title: 'Icone com borda arredondado',
    category: 'layout',
    icon: 'admin-users',

    attributes: {
        icon: {
            type: 'string',
            default: OPTIONS[0].value
        }
    },

    edit,
    save,
});
