import { Fragment } from '@wordpress/element';
import { InspectorControls } from "@wordpress/block-editor";
import { PanelBody, PanelRow, SelectControl } from "@wordpress/components";
import { OPTIONS } from "./options";

export const edit = ({ attributes, setAttributes }) => {
    return (
        <Fragment>
            <div className="icon-bordered-rounded">
                <i className={['fa', attributes.icon].join(' ')}></i>
            </div>
            <InspectorControls>
                <PanelBody
                    title='Ícone'
                    isCollapsed={true}
                >
                    <PanelRow>
                        <SelectControl
                            label="Size"
                            value={ attributes.icon }
                            options={OPTIONS}
                            onChange={(icon) => { setAttributes({ icon }) }}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
        </Fragment>
    )
}
