(function(blocks, element, blockEditor, components) {
    var el = element.createElement;
    var InspectorControls = blockEditor.InspectorControls;
    var RichText = blockEditor.RichText;
    var PanelBody = components.PanelBody;
    var RangeControl = components.RangeControl;
    var TextControl = components.TextControl;

    blocks.registerBlockType('custom/article-grid', {
        title: 'Article Grid',
        icon: 'grid-view',
        category: 'design',

        edit: function(props) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;

            return el('div', null, [
                el(InspectorControls, { key: 'inspector' },
                    el(PanelBody, { title: 'Nastavení mřížky' },
                        el(TextControl, {
                            label: 'Nadpis (použijte %mesic% pro aktuální měsíc v druhém pádu)',
                            help: 'Například: "Co se děje v %mesic%" se zobrazí jako "Co se děje v Lednu"',
                            value: attributes.title,
                            onChange: function(value) {
                                setAttributes({ title: value });
                            }
                        }),
                        el(RangeControl, {
                            label: 'Počet článků',
                            value: attributes.postsPerPage,
                            onChange: function(value) {
                                setAttributes({ postsPerPage: value });
                            },
                            min: 1,
                            max: 12
                        }),
                        el(RangeControl, {
                            label: 'Počet sloupců',
                            value: attributes.columns,
                            onChange: function(value) {
                                setAttributes({ columns: value });
                            },
                            min: 1,
                            max: 4
                        })
                    )
                ),
                el('div', { className: 'article-grid-preview' },
                    el('h2', { className: 'preview-title' },
                        'Náhled mřížky článků'
                    ),
                    el('div', { className: 'preview-info' },
                        el('p', null, 'Nadpis: ' + attributes.title),
                        el('p', null, 'Počet článků: ' + attributes.postsPerPage),
                        el('p', null, 'Počet sloupců: ' + attributes.columns)
                    ),
                    el('div', {
                        className: 'preview-grid',
                        style: {
                            display: 'grid',
                            gridTemplateColumns: `repeat(${attributes.columns}, 1fr)`,
                            gap: '20px'
                        }
                    },
                        Array(attributes.postsPerPage).fill().map(function(_, index) {
                            return el('div', {
                                key: index,
                                className: 'preview-card'
                            },
                                el('div', { className: 'preview-image' }),
                                el('h3', null, 'Náhled článku ' + (index + 1)),
                                el('p', null, 'Ukázkový text článku...')
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