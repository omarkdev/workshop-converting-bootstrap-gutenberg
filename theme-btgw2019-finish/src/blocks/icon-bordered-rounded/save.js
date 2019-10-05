export const save = ({ attributes }) => {
    return (
        <div className="icon-bordered-rounded">
            <i className={['fa', attributes.icon].join(' ')}></i>
        </div>
    )
}
