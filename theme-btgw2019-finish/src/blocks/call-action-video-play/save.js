import {IconPlay} from "./IconPlay";
import {existBackgroundImageFullUrl, getBackgroundImageFullUrl} from "./backgroundImage";

export const save = ({ attributes }) => {
    const backgroundImageFullUrl = existBackgroundImageFullUrl(attributes.backgroundImage)
        ? getBackgroundImageFullUrl(attributes.backgroundImage)
        : '';

    return (
        <div
            className='call-action-video-play d-flex justify-content-center pt-3 pb-4'
            style={{
                'height': '250px',
                'background-color': '#000',
                'background-image': `url('${backgroundImageFullUrl}')`,
                'text-align': 'center',
            }}
        >
            <a href={attributes.url} target="_blank" className="d-flex h-100" rel='noopener noreferrer'>
                <IconPlay/>
            </a>
        </div>
    )
}
