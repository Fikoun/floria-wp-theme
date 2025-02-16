(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;

    blocks.registerBlockType('custom/single-hero', {
        title: 'Single Hero Section',
        icon: 'cover-image',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function onSelectBackgroundImage(media) {
                setAttributes({ backgroundImage: media.url });
            }

            function onSelectIcon(media) {
                setAttributes({ icon: media.url });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'settings' },
                    el(PanelBody, { title: 'Nastavení Hero Sekce' },
                        el('div', { className: 'hero-settings' },
                            el('div', { className: 'setting-group' },
                                el('label', { className: 'setting-label' }, 'Pozadí'),
                                el(MediaUpload, {
                                    onSelect: onSelectBackgroundImage,
                                    type: 'image',
                                    value: attributes.backgroundImage,
                                    render: function(obj) {
                                        return el('div', { className: 'image-upload-container' },
                                            attributes.backgroundImage && el('img', {
                                                src: attributes.backgroundImage,
                                                className: 'preview-image'
                                            }),
                                            el(Button, {
                                                className: 'image-upload-button',
                                                onClick: obj.open
                                            }, attributes.backgroundImage ? 'Změnit obrázek pozadí' : 'Nahrát obrázek pozadí')
                                        );
                                    }
                                })
                            ),
                            el('div', { className: 'setting-group' },
                                el('label', { className: 'setting-label' }, 'Ikona'),
                                el(MediaUpload, {
                                    onSelect: onSelectIcon,
                                    type: 'image',
                                    value: attributes.icon,
                                    render: function(obj) {
                                        return el('div', { className: 'image-upload-container' },
                                            attributes.icon && el('img', {
                                                src: attributes.icon,
                                                className: 'preview-icon'
                                            }),
                                            el(Button, {
                                                className: 'image-upload-button',
                                                onClick: obj.open
                                            }, attributes.icon ? 'Změnit ikonu' : 'Nahrát ikonu')
                                        );
                                    }
                                })
                            ),
                            el('div', { className: 'setting-group' },
                                el('label', { className: 'setting-label' }, 'Nadpis'),
                                el(RichText, {
                                    tagName: 'h1',
                                    className: 'hero-title-input',
                                    value: attributes.title,
                                    onChange: function(value) {
                                        setAttributes({ title: value });
                                    },
                                    placeholder: 'Zadejte nadpis...'
                                })
                            )
                        )
                    )
                ),
                el('div', { className: 'single-hero-preview' },
                    el('div', {
                        className: 'hero-preview-section',
                        style: {
                            backgroundImage: 'url(' + attributes.backgroundImage + ')'
                        }
                    },
                        el('div', { className: 'hero-preview-content' },
                            attributes.icon && el('img', {
                                src: attributes.icon,
                                className: 'hero-preview-icon',
                                alt: 'Hero icon'
                            }),
                            el('h1', { className: 'hero-preview-title' },
                                attributes.title
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