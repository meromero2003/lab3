import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType('wp-gutenberg/sketchfab', {
    title: 'Sketchfab',
    description: "",
    icon: 'smiley',
    category: 'embed',
    attributes: {
        url: {
            type: 'string',
            default: ''
        }
    },
    edit: ({ attributes, setAttributes }) => {
        const blockProps = useBlockProps();

        return React.createElement(
            React.Fragment,
            null,
            React.createElement("div",
                blockProps,
                React.createElement(TextControl,
                    {
                        label: "Sketchfab Url",
                        value: attributes.url,
                        onChange: (url) => setAttributes([url])
                    }),
                attributes.url && React.createElement("iframe", {
                    title: "Sketchfab ",
                    width: "640",
                    height: "450",
                    src: atributes.url + "/emed",
                    allow: "autoplay; fullscreen; vr"
                })
            )
        );

    },
    save: ({ attributes }) => {
        const blockProps = useBlockProps.save();

        return React.createElement(React.Fragment,
            null,
            React.createElement(
                "div", blockProps,
                attributes.url && React.createElement("iframe",
                    {
                        title: "Sketchfab ",
                        width: "640",
                        height: "450",
                        src: atributes.url + "/emed",
                        allow: "autoplay; fullscreen; vr"
                    }
                )
            )
        )
    }
});
