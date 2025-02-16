(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var MediaUpload = blockEditor.MediaUpload;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var Button = components.Button;
    var TextControl = components.TextControl;
    var ToggleControl = components.ToggleControl;

    blocks.registerBlockType('custom/programs-section', {
        title: 'Programs Section',
        icon: 'grid-view',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            function updatePestitelButton(index, field, value) {
                var newButtons = [...attributes.pestitelButtons];
                newButtons[index] = { ...newButtons[index], [field]: value };
                setAttributes({ pestitelButtons: newButtons });
            }

            function updateTravnikovyButton(index, field, value) {
                var newButtons = [...attributes.travnikovyButtons];
                newButtons[index] = { ...newButtons[index], [field]: value };
                setAttributes({ travnikovyButtons: newButtons });
            }

            function addPestitelButton() {
                var newButtons = [...attributes.pestitelButtons];
                newButtons.push({
                    text: 'Nové tlačítko',
                    url: '#',
                    id: Date.now().toString()
                });
                setAttributes({ pestitelButtons: newButtons });
            }

            function addTravnikovyButton() {
                var newButtons = [...attributes.travnikovyButtons];
                newButtons.push({
                    text: 'Nové tlačítko',
                    url: '#',
                    id: Date.now().toString()
                });
                setAttributes({ travnikovyButtons: newButtons });
            }

            function removePestitelButton(index) {
                var newButtons = [...attributes.pestitelButtons];
                newButtons.splice(index, 1);
                setAttributes({ pestitelButtons: newButtons });
            }

            function removeTravnikovyButton(index) {
                var newButtons = [...attributes.travnikovyButtons];
                newButtons.splice(index, 1);
                setAttributes({ travnikovyButtons: newButtons });
            }

            return el('div', null, [
                el(InspectorControls, { key: 'settings' },
                    el(PanelBody, { title: 'Zobrazení sekcí', initialOpen: true },
                        el(ToggleControl, {
                            label: 'Zobrazit pěstitelskou sekci',
                            checked: attributes.showPestitel,
                            onChange: function(value) {
                                setAttributes({ showPestitel: value });
                            }
                        }),
                        el(ToggleControl, {
                            label: 'Zobrazit trávníkovou sekci',
                            checked: attributes.showTravnikovy,
                            onChange: function(value) {
                                setAttributes({ showTravnikovy: value });
                            }
                        })
                    ),
                    attributes.showPestitel && el(PanelBody, { title: 'Pěstitelská sekce' },
                        el('div', { className: 'section-settings' },
                            el('div', { className: 'icon-upload' },
                                el('label', { className: 'components-base-control__label' }, 'Ikona sekce'),
                                el(MediaUpload, {
                                    onSelect: function(media) {
                                        setAttributes({ pestitelIcon: media.url });
                                    },
                                    type: 'image',
                                    value: attributes.pestitelIcon,
                                    render: function(obj) {
                                        return el('div', { className: 'icon-upload-container' },
                                            attributes.pestitelIcon && el('img', {
                                                src: attributes.pestitelIcon,
                                                className: 'icon-preview'
                                            }),
                                            el(Button, {
                                                className: 'components-button is-secondary',
                                                onClick: obj.open
                                            }, attributes.pestitelIcon ? 'Změnit ikonu' : 'Nahrát ikonu')
                                        );
                                    }
                                })
                            ),
                            el(TextControl, {
                                label: 'Nadpis sekce',
                                value: attributes.pestitelTitle,
                                onChange: function(value) {
                                    setAttributes({ pestitelTitle: value });
                                }
                            }),
                            el('div', { className: 'buttons-list' },
                                el('h4', null, 'Tlačítka'),
                                attributes.pestitelButtons.map(function(button, index) {
                                    return el('div', { 
                                        key: button.id,
                                        className: 'button-item bg-primary'
                                    },
                                        el('div', { className: 'button-controls' },
                                            el(TextControl, {
                                                label: 'Text tlačítka',
                                                value: button.text,
                                                onChange: function(value) {
                                                    updatePestitelButton(index, 'text', value);
                                                }
                                            }),
                                            el(TextControl, {
                                                label: 'URL tlačítka',
                                                value: button.url,
                                                onChange: function(value) {
                                                    updatePestitelButton(index, 'url', value);
                                                }
                                            }),
                                            el('div', { className: 'button-actions' },
                                                el(Button, {
                                                    isDestructive: true,
                                                    onClick: function() {
                                                        removePestitelButton(index);
                                                    }
                                                }, 'Odstranit')
                                            )
                                        )
                                    );
                                }),
                                el(Button, {
                                    isPrimary: true,
                                    onClick: addPestitelButton
                                }, 'Přidat tlačítko')
                            )
                        )
                    ),
                    attributes.showTravnikovy && el(PanelBody, { title: 'Trávníková sekce' },
                        el('div', { className: 'section-settings' },
                            el('div', { className: 'icon-upload' },
                                el('label', { className: 'components-base-control__label' }, 'Ikona sekce'),
                                el(MediaUpload, {
                                    onSelect: function(media) {
                                        setAttributes({ travnikovyIcon: media.url });
                                    },
                                    type: 'image',
                                    value: attributes.travnikovyIcon,
                                    render: function(obj) {
                                        return el('div', { className: 'icon-upload-container' },
                                            attributes.travnikovyIcon && el('img', {
                                                src: attributes.travnikovyIcon,
                                                className: 'icon-preview'
                                            }),
                                            el(Button, {
                                                className: 'components-button is-secondary',
                                                onClick: obj.open
                                            }, attributes.travnikovyIcon ? 'Změnit ikonu' : 'Nahrát ikonu')
                                        );
                                    }
                                })
                            ),
                            el(TextControl, {
                                label: 'Nadpis sekce',
                                value: attributes.travnikovyTitle,
                                onChange: function(value) {
                                    setAttributes({ travnikovyTitle: value });
                                }
                            }),
                            el('div', { className: 'buttons-list' },
                                el('h4', null, 'Tlačítka'),
                                attributes.travnikovyButtons.map(function(button, index) {
                                    return el('div', { 
                                        key: button.id,
                                        className: 'button-item bg-secondary'
                                    },
                                        el('div', { className: 'button-controls' },
                                            el(TextControl, {
                                                label: 'Text tlačítka',
                                                value: button.text,
                                                onChange: function(value) {
                                                    updateTravnikovyButton(index, 'text', value);
                                                }
                                            }),
                                            el(TextControl, {
                                                label: 'URL tlačítka',
                                                value: button.url,
                                                onChange: function(value) {
                                                    updateTravnikovyButton(index, 'url', value);
                                                }
                                            }),
                                            el('div', { className: 'button-actions' },
                                                el(Button, {
                                                    isDestructive: true,
                                                    onClick: function() {
                                                        removeTravnikovyButton(index);
                                                    }
                                                }, 'Odstranit')
                                            )
                                        )
                                    );
                                }),
el(Button, {
                                    isPrimary: true,
                                    onClick: addTravnikovyButton
                                }, 'Přidat tlačítko')
                            )
                        )
                    )
                ),
                el('div', { className: 'programs-section-preview' },
                    attributes.showPestitel && el('div', { className: 'pestitel-preview' },
                        attributes.pestitelIcon && el('img', {
                            src: attributes.pestitelIcon,
                            className: 'preview-icon',
                            alt: 'Ikona pěstitelského programu'
                        }),
                        el('h2', null, attributes.pestitelTitle),
                        el('div', { className: 'buttons-preview' },
                            attributes.pestitelButtons.map(function(button) {
                                return el('div', {
                                    key: button.id,
                                    className: 'preview-button bg-primary'
                                }, button.text);
                            })
                        )
                    ),
                    attributes.showTravnikovy && el('div', { className: 'travnikovy-preview' },
                        attributes.travnikovyIcon && el('img', {
                            src: attributes.travnikovyIcon,
                            className: 'preview-icon',
                            alt: 'Ikona trávníkového programu'
                        }),
                        el('h2', null, attributes.travnikovyTitle),
                        el('div', { className: 'buttons-preview' },
                            attributes.travnikovyButtons.map(function(button) {
                                return el('div', {
                                    key: button.id,
                                    className: 'preview-button bg-secondary'
                                }, button.text);
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