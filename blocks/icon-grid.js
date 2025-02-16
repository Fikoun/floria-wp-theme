(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;

    blocks.registerBlockType('custom/icon-grid', {
        title: 'Icon Grid',
        icon: 'grid-view',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function updateIcon(index, property, value) {
                var newIcons = [...attributes.icons];
                newIcons[index] = {
                    ...newIcons[index],
                    [property]: value
                };
                setAttributes({ icons: newIcons });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení ikon' },
                        attributes.icons.map(function(icon, index) {
                            return el('div', { 
                                key: index,
                                className: 'icon-settings'
                            },
                                el('h4', null, 'Ikona ' + (index + 1)),
                                el(MediaUpload, {
                                    onSelect: function(media) {
                                        updateIcon(index, 'image', media.url);
                                    },
                                    type: 'image',
                                    value: icon.image,
                                    render: function(obj) {
                                        return el(Button, {
                                            className: 'button',
                                            onClick: obj.open
                                        },
                                        icon.image ? 'Změnit ikonu' : 'Vybrat ikonu'
                                        );
                                    }
                                }),
                                el(RichText, {
                                    tagName: 'h3',
                                    className: 'icon-title',
                                    value: icon.title,
                                    onChange: function(value) {
                                        updateIcon(index, 'title', value);
                                    },
                                    placeholder: 'Zadejte nadpis...',
                                    allowedFormats: ['core/bold', 'core/italic']
                                })
                            );
                        })
                    )
                ),
                el('div', { className: 'icon-grid-editor' },
                    el('div', { className: 'grid-4-preview' },
                        attributes.icons.map(function(icon, index) {
                            return el('div', {
                                key: index,
                                className: 'icon-card-preview'
                            },
                                icon.image && el('img', {
                                    src: icon.image,
                                    alt: 'Icon ' + (index + 1)
                                }),
                                el('div', {
                                    className: 'icon-title-preview',
                                    dangerouslySetInnerHTML: { __html: icon.title }
                                })
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