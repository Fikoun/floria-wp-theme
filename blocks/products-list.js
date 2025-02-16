(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/products-list', {
        title: 'Products List',
        icon: 'grid-view',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function updateProduct(index, field, value) {
                var newProducts = [...attributes.products];
                newProducts[index] = {
                    ...newProducts[index],
                    [field]: value
                };
                setAttributes({ products: newProducts });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Hlavní nastavení' },
                        el(TextControl, {
                            label: 'Hlavní nadpis',
                            value: attributes.mainTitle,
                            onChange: function(value) {
                                setAttributes({ mainTitle: value });
                            }
                        })
                    ),
                    attributes.products.map(function(product, index) {
                        return el(PanelBody, {
                            title: 'Produkt ' + (index + 1),
                            initialOpen: false,
                            key: index
                        },
                            el(TextControl, {
                                label: 'Podnadpis',
                                value: product.subtitle,
                                onChange: function(value) {
                                    updateProduct(index, 'subtitle', value);
                                }
                            }),
                            el(TextControl, {
                                label: 'Název produktu',
                                value: product.title,
                                onChange: function(value) {
                                    updateProduct(index, 'title', value);
                                }
                            }),
                            el(TextControl, {
                                label: 'URL produktu',
                                value: product.url,
                                onChange: function(value) {
                                    updateProduct(index, 'url', value);
                                }
                            }),
                            el(TextControl, {
                                label: 'Text tlačítka',
                                value: product.buttonText,
                                onChange: function(value) {
                                    updateProduct(index, 'buttonText', value);
                                }
                            }),
                            el(MediaUpload, {
                                onSelect: function(media) {
                                    updateProduct(index, 'image', media.url);
                                },
                                type: 'image',
                                render: function(obj) {
                                    return el(Button, {
                                        className: 'button',
                                        onClick: obj.open
                                    },
                                    product.image ? 'Změnit obrázek' : 'Nahrát obrázek'
                                    );
                                }
                            })
                        );
                    })
                ),
                el('div', { className: 'products-list-preview' },
                    el('h2', { className: 'preview-title' }, attributes.mainTitle),
                    el('div', { className: 'products-grid' },
                        attributes.products.map(function(product, index) {
                            return el('div', { 
                                className: 'product-card',
                                key: index
                            },
                                product.image && el('img', {
                                    src: product.image,
                                    alt: product.title,
                                    className: 'product-image'
                                }),
                                el('h4', { className: 'product-subtitle' }, product.subtitle),
                                el('h3', { className: 'product-title' }, product.title),
                                el('div', { className: 'product-button' }, product.buttonText)
                            );
                        })
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