(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/product-hero', {
        title: 'Product Hero',
        icon: 'products',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function onSelectMainImage(media) {
                setAttributes({ mainImage: media.url });
            }

            function onSelectFlowerIcon(media) {
                setAttributes({ flowerIcon: media.url });
            }

            function onSelectGalleryImage(media, index) {
                var newGalleryImages = [...attributes.galleryImages];
                newGalleryImages[index] = media.url;
                setAttributes({ galleryImages: newGalleryImages });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení produktu' },
                        el('div', { className: 'editor-section' },
                            el(MediaUpload, {
                                onSelect: onSelectMainImage,
                                type: 'image',
                                value: attributes.mainImage,
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    attributes.mainImage ? 'Změnit hlavní obrázek' : 'Vybrat hlavní obrázek'
                                    );
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: onSelectFlowerIcon,
                                type: 'image',
                                value: attributes.flowerIcon,
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    attributes.flowerIcon ? 'Změnit ikonu květiny' : 'Vybrat ikonu květiny'
                                    );
                                }
                            }),
                            el('div', { className: 'gallery-uploads' },
                                el('h4', null, 'Galerie produktů'),
                                attributes.galleryImages.map(function(image, index) {
                                    return el(MediaUpload, {
                                        key: index,
                                        onSelect: function(media) {
                                            onSelectGalleryImage(media, index);
                                        },
                                        type: 'image',
                                        value: image,
                                        render: function(obj) {
                                            return el(Button, {
                                                className: 'button',
                                                onClick: obj.open
                                            },
                                            image ? 'Změnit obrázek ' + (index + 1) : 'Vybrat obrázek ' + (index + 1)
                                            );
                                        }
                                    });
                                })
                            ),
                            el(TextControl, {
                                label: 'URL tlačítka',
                                value: attributes.buttonUrl,
                                onChange: function(value) {
                                    setAttributes({ buttonUrl: value });
                                }
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: attributes.buttonText,
                                onChange: function(value) {
                                    setAttributes({ buttonText: value });
                                }
                            })
                        )
                    )
                ),
                el('div', { className: 'product-hero-editor' },
                    el('div', { className: 'text-inputs' },
                        el('div', { className: 'input-group' },
                            el('label', { className: 'input-label' }, 'Název produktu'),
                            el(RichText, {
                                tagName: 'h2',
                                className: 'product-title-input',
                                value: attributes.productTitle,
                                onChange: function(value) {
                                    setAttributes({ productTitle: value });
                                },
                                placeholder: 'Zadejte název produktu...',
                                allowedFormats: ['core/bold', 'core/italic']
                            })
                        ),
                        el('div', { className: 'input-group' },
                            el('label', { className: 'input-label' }, 'Popis produktu'),
                            el(RichText, {
                                tagName: 'div',
                                className: 'product-description-input',
                                value: attributes.productDescription,
                                onChange: function(value) {
                                    setAttributes({ productDescription: value });
                                },
                                placeholder: 'Zadejte popis produktu...',
                                allowedFormats: ['core/bold', 'core/italic', 'core/link']
                            })
                        )
                    ),
                    el('div', { className: 'preview-section' },
                        el('div', { className: 'main-image' },
                            attributes.mainImage && el('img', {
                                src: attributes.mainImage,
                                alt: 'Main product image'
                            })
                        ),
                        el('div', { className: 'gallery-preview' },
                            attributes.galleryImages.map(function(image, index) {
                                return image && el('img', {
                                    key: index,
                                    src: image,
                                    alt: 'Gallery image ' + (index + 1)
                                });
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