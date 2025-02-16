(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;

    blocks.registerBlockType('custom/content-sections-wysiwyg', {
        title: 'Content Sections WYSIWYG',
        icon: 'editor-aligncenter',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení sekcí' },
                        el(RichText, {
                            tagName: 'h2',
                            label: 'Hlavní nadpis',
                            value: attributes.mainHeadline,
                            onChange: function(value) {
                                setAttributes({ mainHeadline: value });
                            }
                        }),
                        el(RichText, {
                            tagName: 'p',
                            label: 'Prostřední text',
                            value: attributes.middleText,
                            onChange: function(value) {
                                setAttributes({ middleText: value });
                            }
                        }),
                        el(RichText, {
                            tagName: 'h3',
                            label: 'Nadpis sekce 2',
                            value: attributes.section2Headline,
                            onChange: function(value) {
                                setAttributes({ section2Headline: value });
                            }
                        }),
                        el(RichText, {
                            tagName: 'h3',
                            label: 'Nadpis sekce 3',
                            value: attributes.section3Headline,
                            onChange: function(value) {
                                setAttributes({ section3Headline: value });
                            }
                        })
                    )
                ),
                el('div', { className: 'content-sections-wysiwyg-preview' },
                    // Section 1
                    el('div', { className: 'section' },
                        el('h2', { className: 'section-title' }, attributes.mainHeadline),
                        el(RichText, {
                            tagName: 'div',
                            className: 'section-content',
                            value: attributes.section1Content,
                            onChange: function(value) {
                                setAttributes({ section1Content: value });
                            },
                            placeholder: 'Zadejte obsah první sekce...'
                        })
                    ),
                    // Middle Text
                    el('h3', { className: 'middle-text' }, attributes.middleText),
                    // Section 2
                    el('div', { className: 'section' },
                        el('h3', { className: 'section-title' }, attributes.section2Headline),
                        el(RichText, {
                            tagName: 'div',
                            className: 'section-content',
                            value: attributes.section2Content,
                            onChange: function(value) {
                                setAttributes({ section2Content: value });
                            },
                            placeholder: 'Zadejte obsah druhé sekce...'
                        })
                    ),
                    // Section 3
                    el('div', { className: 'section' },
                        el('h3', { className: 'section-title' }, attributes.section3Headline),
                        el(RichText, {
                            tagName: 'div',
                            className: 'section-content',
                            value: attributes.section3Content,
                            onChange: function(value) {
                                setAttributes({ section3Content: value });
                            },
                            placeholder: 'Zadejte obsah třetí sekce...'
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