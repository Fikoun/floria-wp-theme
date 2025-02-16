(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var TextControl = components.TextControl;
    var TextareaControl = components.TextareaControl;

    blocks.registerBlockType('custom/contact-section', {
        title: 'Contact Section',
        icon: 'phone',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Kontaktní informace' },
                        el(TextControl, {
                            label: 'Nadpis',
                            value: attributes.title,
                            onChange: function(value) {
                                setAttributes({ title: value });
                            }
                        }),
                        el(TextControl, {
                            label: 'Telefon',
                            value: attributes.phone,
                            onChange: function(value) {
                                setAttributes({ phone: value });
                            }
                        }),
                        el(TextControl, {
                            label: 'Email',
                            value: attributes.email,
                            onChange: function(value) {
                                setAttributes({ email: value });
                            }
                        }),
                        el(TextareaControl, {
                            label: 'Adresa (každý řádek na nový řádek)',
                            value: attributes.address,
                            onChange: function(value) {
                                setAttributes({ address: value });
                            }
                        }),
                        el(TextareaControl, {
                            label: 'Firemní údaje (každý řádek na nový řádek)',
                            value: attributes.companyInfo,
                            onChange: function(value) {
                                setAttributes({ companyInfo: value });
                            }
                        }),
                        el(TextControl, {
                            label: 'URL mapy',
                            value: attributes.mapUrl,
                            onChange: function(value) {
                                setAttributes({ mapUrl: value });
                            }
                        })
                    )
                ),
                el('div', { className: 'contact-section-preview' },
                    el('div', { className: 'contact-info' },
                        el('h2', { className: 'preview-title' }, attributes.title),
                        el('div', { className: 'preview-contact' },
                            el('div', { className: 'preview-phone' },
                                el('p', null, 'Telefon'),
                                el('p', null, attributes.phone)
                            ),
                            el('div', { className: 'preview-email' },
                                el('p', null, 'Email'),
                                el('p', null, attributes.email)
                            )
                        ),
                        el('div', { className: 'preview-address' },
                            el('pre', null, attributes.address)
                        ),
                        el('div', { className: 'preview-company' },
                            el('pre', null, attributes.companyInfo)
                        )
                    ),
                    el('div', { className: 'preview-map' },
                        el('iframe', {
                            src: attributes.mapUrl,
                            width: '100%',
                            height: '300',
                            frameBorder: '0'
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