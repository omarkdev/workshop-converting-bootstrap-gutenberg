export const save = ({ attributes }) => {
    return (
        <a
            href={ attributes.url }
            className="btn btn-black-transparent-bordered"
        >{ attributes.content }</a>
    )
}
