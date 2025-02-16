(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/hero-section', {
        title: 'Hero Section',
        icon: 'cover-image',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function onSelectLeftImage(media) {
                setAttributes({ leftBackgroundImage: media.url });
            }

            function onSelectRightImage(media) {
                setAttributes({ rightBackgroundImage: media.url });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení sekce' },
                        el('div', { className: 'editor-section' },
                            el('h3', null, 'Levá sekce'),
                            el('div', { className: 'components-base-control' },
                                el('label', { className: 'components-base-control__label' }, 'Nadpis'),
                                el(RichText, {
                                    tagName: 'h1',
                                    className: 'hero-section-title',
                                    value: attributes.leftTitle,
                                    onChange: function(value) {
                                        setAttributes({ leftTitle: value });
                                    },
                                    placeholder: 'Zadejte nadpis...',
                                    allowedFormats: ['core/bold', 'core/italic']
                                })
                            ),
                            el(MediaUpload, {
                                onSelect: onSelectLeftImage,
                                type: 'image',
                                value: attributes.leftBackgroundImage,
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    attributes.leftBackgroundImage ? 'Změnit obrázek' : 'Vybrat obrázek'
                                    );
                                }
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: attributes.leftButtonText,
                                onChange: function(value) {
                                    setAttributes({ leftButtonText: value });
                                }
                            }),
                            el(TextControl, {
                                label: 'URL tlačítka',
                                value: attributes.leftButtonUrl,
                                onChange: function(value) {
                                    setAttributes({ leftButtonUrl: value });
                                }
                            }),
                            el('h3', null, 'Pravá sekce'),
                            el('div', { className: 'components-base-control' },
                                el('label', { className: 'components-base-control__label' }, 'Nadpis'),
                                el(RichText, {
                                    tagName: 'h1',
                                    className: 'hero-section-title',
                                    value: attributes.rightTitle,
                                    onChange: function(value) {
                                        setAttributes({ rightTitle: value });
                                    },
                                    placeholder: 'Zadejte nadpis...',
                                    allowedFormats: ['core/bold', 'core/italic']
                                })
                            ),
                            el(MediaUpload, {
                                onSelect: onSelectRightImage,
                                type: 'image',
                                value: attributes.rightBackgroundImage,
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    attributes.rightBackgroundImage ? 'Změnit obrázek' : 'Vybrat obrázek'
                                    );
                                }
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: attributes.rightButtonText,
                                onChange: function(value) {
                                    setAttributes({ rightButtonText: value });
                                }
                            }),
                            el(TextControl, {
                                label: 'URL tlačítka',
                                value: attributes.rightButtonUrl,
                                onChange: function(value) {
                                    setAttributes({ rightButtonUrl: value });
                                }
                            })
                        )
                    )
                ),
                el('div', { className: 'hero-section-editor' },
                    el('div', {
                        className: 'preview-left',
                        style: { backgroundImage: 'url(' + attributes.leftBackgroundImage + ')' }
                    },
                        el('h4', null, 'Levá sekce'),
                        el('div', { dangerouslySetInnerHTML: { __html: attributes.leftTitle } }),
                        el('p', null, 'Tlačítko: ' + attributes.leftButtonText),
                        el('p', null, 'URL: ' + attributes.leftButtonUrl)
                    ),
                    el('div', {
                        className: 'preview-right',
                        style: { backgroundImage: 'url(' + attributes.rightBackgroundImage + ')' }
                    },
                        el('h4', null, 'Pravá sekce'),
                        el('div', { dangerouslySetInnerHTML: { __html: attributes.rightTitle } }),
                        el('p', null, 'Tlačítko: ' + attributes.rightButtonText),
                        el('p', null, 'URL: ' + attributes.rightButtonUrl)
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