import { Button, PanelRow } from "@wordpress/components";
import { Fragment } from '@wordpress/element';

export const getBackgroundImageFullUrl = (backgroundImage) =>
    backgroundImage.sizes.full.url;

export const existBackgroundImageFullUrl = (backgroundImage) => backgroundImage &&
    backgroundImage.sizes &&
    backgroundImage.sizes.full &&
    backgroundImage.sizes.full.url;

export const renderBackgroundImage = (open, backgroundImage) => {
    return (
        <Fragment>
            <PanelRow>
                <Button isPrimary onClick={open}>Selecionar imagem</Button>
            </PanelRow>
            { existBackgroundImageFullUrl(backgroundImage) &&
                <PanelRow>
                    <img src={getBackgroundImageFullUrl(backgroundImage)} className='image'/>
                </PanelRow>
            }
        </Fragment>
    )
}
