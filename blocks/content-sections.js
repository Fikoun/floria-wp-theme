(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;
    var ToggleControl = components.ToggleControl;
    var SelectControl = components.SelectControl;
    var IconButton = components.IconButton;

    blocks.registerBlockType('custom/content-sections', {
        title: 'Content Sections',
        icon: 'columns',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function updateSection(index, property, value) {
                var newSections = [...attributes.sections];
                newSections[index] = {
                    ...newSections[index],
                    [property]: value
                };
                setAttributes({ sections: newSections });
            }

            function moveSection(index, direction) {
                var newSections = [...attributes.sections];
                var temp = newSections[index];
                newSections[index] = newSections[index + direction];
                newSections[index + direction] = temp;
                setAttributes({ sections: newSections });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Hlavní nastavení' },
                        el(RichText, {
                            tagName: 'h2',
                            label: 'Hlavní nadpis',
                            value: attributes.mainTitle,
                            onChange: function(value) {
                                setAttributes({ mainTitle: value });
                            },
                            placeholder: 'Zadejte hlavní nadpis...'
                        }),
                        el(RichText, {
                            tagName: 'h2',
                            label: 'Spodní nadpis',
                            value: attributes.bottomTitle,
                            onChange: function(value) {
                                setAttributes({ bottomTitle: value });
                            },
                            placeholder: 'Zadejte spodní nadpis...'
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
                        el(ToggleControl, {
                            label: 'Zobrazit tlačítko',
                            checked: attributes.showButton,
                            onChange: function(value) {
                                setAttributes({ showButton: value });
                            }
                        })
                    ),
                    el(PanelBody, { title: 'Sekce', initialOpen: false },
                        attributes.sections.map(function(section, index) {
                            return el('div', { 
                                key: index,
                                className: 'section-settings'
                            },
                                el('h4', null, 'Sekce ' + (index + 1)),
                                el(RichText, {
                                    tagName: 'h3',
                                    label: 'Nadpis sekce',
                                    value: section.title,
                                    onChange: function(value) {
                                        updateSection(index, 'title', value);
                                    },
                                    placeholder: 'Zadejte nadpis sekce...'
                                }),
                                el(RichText, {
                                    tagName: 'p',
                                    label: 'Obsah sekce',
                                    value: section.content,
                                    onChange: function(value) {
                                        updateSection(index, 'content', value);
                                    },
                                    placeholder: 'Zadejte obsah sekce...'
                                }),
                                el(MediaUpload, {
                                    onSelect: function(media) {
                                        updateSection(index, 'image', media.url);
                                    },
                                    type: 'image',
                                    value: section.image,
                                    render: function(obj) {
                                        return el(Button, {
                                            className: 'button',
                                            onClick: obj.open
                                        },
                                        section.image ? 'Změnit obrázek' : 'Vybrat obrázek'
                                        );
                                    }
                                }),
                                el(SelectControl, {
                                    label: 'Pozice obrázku',
                                    value: section.imagePosition,
                                    options: [
                                        { label: 'Vlevo', value: 'left' },
                                        { label: 'Vpravo', value: 'right' }
                                    ],
                                    onChange: function(value) {
                                        updateSection(index, 'imagePosition', value);
                                    }
                                }),
                                el('div', { className: 'section-controls' },
                                    index > 0 && el(IconButton, {
                                        icon: 'arrow-up-alt2',
                                        label: 'Posunout nahoru',
                                        onClick: function() {
                                            moveSection(index, -1);
                                        }
                                    }),
                                    index < attributes.sections.length - 1 && el(IconButton, {
                                        icon: 'arrow-down-alt2',
                                        label: 'Posunout dolů',
                                        onClick: function() {
                                            moveSection(index, 1);
                                        }
                                    })
                                )
                            );
                        })
                    )
                ),
                el('div', { className: 'content-sections-editor' },
                    el('div', { className: 'preview-container' },
                        el('h2', { className: 'main-title' }, attributes.mainTitle),
                        attributes.sections.map(function(section, index) {
                            return el('div', {
                                key: index,
                                className: 'section-preview'
                            },
                                el('div', { className: 'section-content' },
                                    el('h3', null, section.title),
                                    el('p', null, section.content),
                                    section.image && el('img', {
                                        src: section.image,
                                        alt: 'Section image',
                                        className: 'section-image ' + section.imagePosition
                                    })
                                )
                            );
                        }),
                        el('div', { className: 'bottom-content' },
                            el('h2', { className: 'bottom-title' }, attributes.bottomTitle),
                            attributes.showButton && el('button', {
                                className: 'preview-button'
                            }, attributes.buttonText)
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