import { InspectorControls } from "@wordpress/block-editor";
import { TextControl, PanelRow, PanelBody } from "@wordpress/components";
import { Fragment } from '@wordpress/element';

export const edit = ({ attributes, setAttributes }) => {
    return (
        <Fragment>
            <div>Seu nome é <strong>{ attributes.name }</strong></div>
            <InspectorControls>
                <PanelBody
                    title='Nome'
                    isCollapsed={true}
                >
                    <PanelRow>
                        <TextControl
                            label='Seu nome'
                            onChange={(name) => setAttributes({ name })}
                            value={attributes.name}
                        ></TextControl>
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
        </Fragment>
    );
}
