(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/eshop-banner', {
        title: 'Eshop Banner',
        icon: 'store',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení banneru' },
                        el(RichText, {
                            label: 'Nadpis',
                            value: attributes.title,
                            onChange: function(value) {
                                setAttributes({ title: value });
                            }
                        }),
                        el(TextControl, {
                            label: 'Text tlačítka',
                            value: attributes.buttonText,
                            onChange: function(value) {
                                setAttributes({ buttonText: value });
                            }
                        }),
                        el(TextControl, {
                            label: 'URL tlačítka',
                            value: attributes.buttonUrl,
                            onChange: function(value) {
                                setAttributes({ buttonUrl: value });
                            }
                        }),
                        el('div', { className: 'editor-image-controls' },
                            el('p', null, 'Logo'),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    setAttributes({ logoImage: media.url });
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    attributes.logoImage ? 'Změnit logo' : 'Nahrát logo'
                                    );
                                }
                            })
                        )
                    )
                ),
                el('div', { className: 'eshop-banner-preview' },
                    el('div', { className: 'banner-content' },
                        el('div', { className: 'banner-text' },
                            el('h3', { 
                                className: 'banner-title',
                                dangerouslySetInnerHTML: { __html: attributes.title }
                            }),
                            el('div', { className: 'banner-button' },
                                attributes.buttonText
                            )
                        ),
                        attributes.logoImage && el('div', { className: 'banner-logo' },
                            el('img', {
                                src: attributes.logoImage,
                                alt: 'Logo'
                            })
                        )
                    )
                )
            ]);
        },

        save: function() {
            return null;
        }
    });
}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
    window.wp.components
));