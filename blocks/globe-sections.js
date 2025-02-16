(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/globe-sections', {
        title: 'Globe Sections',
        icon: 'admin-site',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function updateSection(side, property, value) {
                var section = side === 'left' ? 'leftSection' : 'rightSection';
                setAttributes({
                    [section]: {
                        ...attributes[section],
                        [property]: value
                    }
                });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Hlavní nastavení' },
                        el(RichText, {
                            tagName: 'h1',
                            value: attributes.mainTitle,
                            onChange: function(value) {
                                setAttributes({ mainTitle: value });
                            },
                            placeholder: 'Zadejte hlavní nadpis...'
                        })
                    ),
                    el(PanelBody, { title: 'Levá sekce' },
                        el('div', { className: 'section-settings' },
                            el(RichText, {
                                tagName: 'h2',
                                value: attributes.leftSection.title,
                                onChange: function(value) {
                                    updateSection('left', 'title', value);
                                },
                                placeholder: 'Nadpis levé sekce'
                            }),
                            el(RichText, {
                                tagName: 'p',
                                value: attributes.leftSection.content,
                                onChange: function(value) {
                                    updateSection('left', 'content', value);
                                },
                                placeholder: 'Obsah levé sekce'
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: attributes.leftSection.buttonText,
                                onChange: function(value) {
                                    updateSection('left', 'buttonText', value);
                                }
                            }),
                            el(TextControl, {
                                label: 'URL tlačítka',
                                value: attributes.leftSection.buttonUrl,
                                onChange: function(value) {
                                    updateSection('left', 'buttonUrl', value);
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('left', 'globeImage', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.leftSection.globeImage ? 'Změnit globe' : 'Vybrat globe');
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('left', 'iconHover', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.leftSection.iconHover ? 'Změnit hover ikonu' : 'Vybrat hover ikonu');
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('left', 'iconDefault', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.leftSection.iconDefault ? 'Změnit default ikonu' : 'Vybrat default ikonu');
                                }
                            })
                        )
                    ),
                    el(PanelBody, { title: 'Pravá sekce' },
                        el('div', { className: 'section-settings' },
                            el(RichText, {
                                tagName: 'h2',
                                value: attributes.rightSection.title,
                                onChange: function(value) {
                                    updateSection('right', 'title', value);
                                },
                                placeholder: 'Nadpis pravé sekce'
                            }),
                            el(RichText, {
                                tagName: 'p',
                                value: attributes.rightSection.content,
                                onChange: function(value) {
                                    updateSection('right', 'content', value);
                                },
                                placeholder: 'Obsah pravé sekce'
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: attributes.rightSection.buttonText,
                                onChange: function(value) {
                                    updateSection('right', 'buttonText', value);
                                }
                            }),
                            el(TextControl, {
                                label: 'URL tlačítka',
                                value: attributes.rightSection.buttonUrl,
                                onChange: function(value) {
                                    updateSection('right', 'buttonUrl', value);
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('right', 'globeImage', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.rightSection.globeImage ? 'Změnit globe' : 'Vybrat globe');
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('right', 'iconHover', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.rightSection.iconHover ? 'Změnit hover ikonu' : 'Vybrat hover ikonu');
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateSection('right', 'iconDefault', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    }, attributes.rightSection.iconDefault ? 'Změnit default ikonu' : 'Vybrat default ikonu');
                                }
                            })
                        )
                    )
                ),
                el('div', { className: 'globe-sections-preview' },
                    el('h1', { className: 'preview-title' }, attributes.mainTitle),
                    el('div', { className: 'preview-sections' },
                        el('div', { className: 'preview-section' },
                            el('div', { className: 'preview-content' },
                                el('h2', null, attributes.leftSection.title),
                                el('p', null, attributes.leftSection.content),
                                el('div', { className: 'preview-button' }, attributes.leftSection.buttonText)
                            ),
                            attributes.leftSection.globeImage && el('img', {
                                src: attributes.leftSection.globeImage,
                                className: 'preview-globe'
                            })
                        ),
                        el('div', { className: 'preview-section' },
                            attributes.rightSection.globeImage && el('img', {
                                src: attributes.rightSection.globeImage,
                                className: 'preview-globe'
                            }),
                            el('div', { className: 'preview-content' },
                                el('h2', null, attributes.rightSection.title),
                                el('p', null, attributes.rightSection.content),
                                el('div', { className: 'preview-button' }, attributes.rightSection.buttonText)
                            )
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