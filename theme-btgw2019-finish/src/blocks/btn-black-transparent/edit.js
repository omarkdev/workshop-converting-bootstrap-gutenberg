import { Fragment } from '@wordpress/element';
import { RichText, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, PanelRow, TextControl } from "@wordpress/components";

export const edit = ({ attributes, setAttributes }) => {
    return (
        <Fragment>
            <RichText
                tagName='span'
                value={attributes.content}
                onChange={(content) => setAttributes({ content })}
                className="btn btn-black-transparent-bordered"
            />
            <InspectorControls>
                <PanelBody
                    title='URL'
                    isCollapsed={false}
                >
                    <PanelRow>
                        <TextControl
                            label='URL'
                            value={attributes.url}
                            onChange={(url) => setAttributes({ url })}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
        </Fragment>
    )
}
