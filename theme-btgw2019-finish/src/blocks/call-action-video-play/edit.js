import { Fragment } from '@wordpress/element';
import { InspectorControls, MediaUpload } from "@wordpress/block-editor";
import { PanelBody, PanelRow, TextControl } from "@wordpress/components";
import { IconPlay } from "./IconPlay";
import {
    renderBackgroundImage,
    getBackgroundImageFullUrl,
    existBackgroundImageFullUrl,
} from "./backgroundImage";

export const edit = ({ attributes, setAttributes }) => {
    const backgroundImageFullUrl = existBackgroundImageFullUrl(attributes.backgroundImage)
        ? getBackgroundImageFullUrl(attributes.backgroundImage)
        : '';

    return (
        <Fragment>
            <div
                className='call-action-video-play d-flex justify-content-center pt-3 pb-4'
                style={{
                    'height': '250px',
                    'background-color': '#000',
                    'background-image': `url('${backgroundImageFullUrl}')`,
                    'text-align': 'center',
                }}
            >
                <IconPlay/>
            </div>
            <InspectorControls>
                <PanelBody
                    title='Acesso'
                    initialOpen={false}
                >
                    <PanelRow>
                        <TextControl
                            label='URL'
                            value={attributes.url}
                            onChange={(url) => setAttributes({url})}
                        />
                    </PanelRow>
                </PanelBody>

                <PanelBody
                    title='Imagem de Fundo'
                    initialOpen={false}
                >
                    <MediaUpload
                        allowedTypes={['image']}
                        value={attributes.backgroundImage.id}
                        onSelect={(backgroundImage) => setAttributes({ backgroundImage })}
                        title='Selecione a imagem de fundo'
                        render={({open}) => renderBackgroundImage(open, attributes.backgroundImage)}
                    />
                </PanelBody>
            </InspectorControls>
        </Fragment>
    )
}
