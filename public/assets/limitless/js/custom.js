/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
var DatatableBasic = function() {


    //
    // Setup datatable components
    //

    // Basic Datatable examples
    var _componentDatatableBasic = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [ 5 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Search:</span> _INPUT_',
                searchPlaceholder: '',
                lengthMenu: '<span>Display:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

        // Basic datatable
        $('.datatable-basic').DataTable();

        // Alternative pagination
        $('.datatable-pagination').DataTable({
            pagingType: "simple",
            language: {
                paginate: {'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev'}
            }
        });

        // Datatable with saving state
        $('.datatable-save-state').DataTable({
            stateSave: true
        });

        // Scrollable datatable
        var table = $('.datatable-scroll-y').DataTable({
            autoWidth: true,
            scrollY: 300
        });

        // Resize scrollable table when sidebar width changes
        $('.sidebar-control').on('click', function() {
            table.columns.adjust().draw();
        });
    };

    // Select2 for length menu styling
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            width: 'auto'
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatableBasic();
            _componentSelect2();
        }
    }
}();

// Setup CKEditor module
// ------------------------------

var CKEditor = function() {


    //
    // Setup module components
    //

    // CKEditor
    var _componentCKEditor = function() {
        if (typeof CKEDITOR == 'undefined') {
            console.warn('Warning - ckeditor.js is not loaded.');
            return;
        }


        // Full featured editor
        // ------------------------------

        // Setup
        CKEDITOR.replace('editor-full', {
            height: 400,
            extraPlugins: 'forms',
            toolbarGroups: [
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                { name: 'forms', groups: [ 'forms' ] },
                '/',
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                { name: 'links', groups: [ 'links' ] },
                { name: 'insert', groups: [ 'insert' ] },
                '/',
                { name: 'styles', groups: [ 'styles' ] },
                { name: 'colors', groups: [ 'colors' ] },
                { name: 'tools', groups: [ 'tools' ] },
                { name: 'others', groups: [ 'others' ] },
                { name: 'about', groups: [ 'about' ] },
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ] }
            ],
            removeButtons: 'Save,NewPage,Preview,Print,Templates,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Superscript,Subscript,Strike,BidiLtr,BidiRtl,Language,About,Flash,Smiley,SpecialChar,Blockquote,CreateDiv,Anchor'
        });


        // Readonly editor
        // ------------------------------

        // Setup
        var editorReadOnly;

        // Setup
        var editorReadOnly = CKEDITOR.replace('editor-readonly', {
            height: 400,
            extraPlugins: 'forms'
        });

        // The instanceReady event is fired when an instance of CKEditor has finished
        // its initialization.
        editorReadOnly.on('instanceReady', function (ev) {
            editorReadOnly = ev.editor;

            // Show this "on" button.
            document.getElementById('readOnlyOn').style.display = '';

            // Event fired when the readOnly property changes.
            editorReadOnly.on('readOnly', function () {
                document.getElementById('readOnlyOn').style.display = this.readOnly ? 'none' : '';
                document.getElementById('readOnlyOff').style.display = this.readOnly ? '' : 'none';
            });
        });

        // Toggle readonly state
        function toggleReadOnly(isReadOnly) {
            // Change the read-only state of the editor.
            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setReadOnly
            editorReadOnly.setReadOnly(isReadOnly);
        }
        document.getElementById('readOnlyOn').onclick = function() {
            toggleReadOnly();
        };
        document.getElementById('readOnlyOff').onclick = function() {
            toggleReadOnly(false);
        };


        // Enter key configuration
        // ------------------------------

        // Define editor
        var editorKey;

        // Setup editor
        function changeEnter() {

            // If an editor instance exists, destroy it first.
            if (editorKey)
                editorKey.destroy(true);

            // Create an editor instance again, with appropriate settings.
            editorKey = CKEDITOR.replace('editor-enter', {
                height: 400,
                enterMode: Number(document.getElementById('xEnter').value),
                shiftEnterMode: Number(document.getElementById('xShiftEnter').value)
            });
        }

        // Trigger initialization
        changeEnter();

        // // Change configuration
        document.getElementById('xEnter').onchange = function() {
            changeEnter();
        };
        document.getElementById('xShiftEnter').onchange = function() {
            changeEnter();
        };



        // Inline editor
        // ------------------------------

        // We need to turn off the automatic editor creation first
        CKEDITOR.disableAutoInline = true;

        // The inline editor should be enabled on an element with "contenteditable" attribute set to "true".
        // Otherwise CKEditor will start in read-only mode.
        var introduction = document.getElementById('editor-inline');
        introduction.setAttribute('contenteditable', true);

        // Initialize
        CKEDITOR.inline('editor-inline', {
            // Allow some non-standard markup that we used in the introduction.
            extraAllowedContent: 'a(documentation);abbr[title];code',
            removePlugins: 'stylescombo'
        });
    };

    // Select2
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        };

        // Default initialization
        $('.form-control-select2').select2({
            minimumResultsForSearch: Infinity
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentCKEditor();
            _componentSelect2();
        }
    }
}();

// Setup form extended module
// ------------------------------

var ExtendedFormControls = function() {


    //
    // Setup module components
    //

    // Input formatter
    var _componentInputFormatter = function() {
        if (!$().formatter) {
            console.warn('Warning - formatter.min.js is not loaded.');
            return;
        }

        // Date
        $('[name="format-date"]').formatter({
            pattern: '{{99}}/{{99}}/{{9999}}'
        });

        // Credit card
        $('[name="format-credit-card"]').formatter({
            pattern: '{{9999}} - {{9999}} - {{9999}} - {{9999}}'
        });

        // Phone #
        $('.format-phone-number').formatter({
            pattern: '({{999}}) {{999}} - {{9999}}'
        });

        // Phone ext
        $('[name="format-phone-ext"]').formatter({
            pattern: '({{999}}) {{999}} - {{9999}} / {{a999}}'
        });

        // Currency
        $('[name="format-currency"]').formatter({
            pattern: '${{999}}.{{99}}'
        });

        // International phone
        $('[name="format-international-phone"]').formatter({
            pattern: '+3{{9}} {{999}} {{999}} {{999}}'
        });

        // Tax id
        $('[name="format-tax-id"]').formatter({
            pattern: '{{99}} - {{9999999}}'
        });

        // SSN
        $('[name="format-ssn"]').formatter({
            pattern: '{{999}} - {{99}} - {{9999}}'
        });

        // Product key
        $('[name="format-product-key"]').formatter({
            pattern: '{{a*}} - {{999}} - {{a999}}'
        });

        // Order #
        $('[name="format-order-number"]').formatter({
            pattern: '{{aaa}} - {{999}} - {{***}}'
        });

        // ISBN
        $('[name="format-isbn"]').formatter({
            pattern: '{{999}} - {{99}} - {{999}} - {{9999}} - {{9}}'
        });

        // Persistent
        $('[name="format-persistent"]').formatter({
            pattern: '+3 ({{999}}) {{999}} - {{99}} - {{99}}'
        });
    };

    // Autosize
    var _componentAutosize = function() {
        if (typeof autosize == 'undefined') {
            console.warn('Warning - autosize.min.js is not loaded.');
            return;
        }

        // Basic example
        autosize($('.elastic'));

        // Manual trigger
        $('.elastic-manual-trigger').on('click', function() {
            var manual = autosize($('.elastic-manual'));
            $('.elastic-manual').val('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed ultricies nibh, sed faucibus eros. Vivamus tristique fringilla ante, vitae pellentesque quam porta vel. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc vehicula gravida nisl non imperdiet. Mauris felis odio, vehicula et laoreet non, tempor non enim. Cras convallis sapien hendrerit nibh sagittis sollicitudin. Fusce nec ultricies justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ac urna in dui consequat cursus vel sit amet mauris. Proin nec bibendum arcu. Aenean sit amet nisi mi. Sed non leo nisl. Mauris leo odio, ultricies interdum ornare ac, posuere eu risus. Suspendisse adipiscing sapien sit amet gravida sollicitudin. Maecenas laoreet velit in dui adipiscing, vel fermentum tellus ullamcorper. Nullam et mi rhoncus, tempus nulla sit amet, varius ipsum.');
            autosize.update(manual);
        });

        // Destroy method
        var destroyAutosize = autosize($('.elastic-destroy'));
        $('.elastic-destroy-trigger').on('click', function() {
            autosize.destroy(destroyAutosize);
        });
    };

    // Maxlength
    var _componentMaxlength = function() {
        if (!$().maxlength) {
            console.warn('Warning - maxlength.min.js is not loaded.');
            return;
        }

        // Basic example
        $('.maxlength').maxlength();

        // Threshold
        $('.maxlength-threshold').maxlength({
            threshold: 15
        });

        // Custom badge color
        $('.maxlength-custom').maxlength({
            threshold: 10,
            warningClass: 'badge badge-primary form-text',
            limitReachedClass: 'badge badge-danger form-text'
        });

        // Options
        $('.maxlength-options').maxlength({
            alwaysShow: true,
            threshold: 10,
            warningClass: 'text-success form-text',
            limitReachedClass: 'text-danger form-text',
            separator: ' of ',
            preText: 'You have ',
            postText: ' chars remaining.',
            validate: true
        });

        // Always show badge
        $('.maxlength-textarea').maxlength({
            alwaysShow: true
        });

        // Badge position
        $('.maxlength-badge-position').maxlength({
            alwaysShow: true,
            placement: 'top'
        });
    };

    // Typeahead
    var _componentTypeahead = function() {
        if (!$().typeahead) {
            console.warn('Warning - typeahead.bundle.min.js is not loaded.');
            return;
        }

        //
        // Basic example
        //

        // Substring matches
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {

                        // the typeahead jQuery plugin expects suggestions to a
                        // JavaScript object, refer to typeahead docs for more info
                        matches.push({ value: str });
                    }
                });

                cb(matches);
            };
        };

        // Add data
        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
        ];

        // Initialize
        $('.typeahead-basic').typeahead(
            {
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'states',
                displayKey: 'value',
                source: substringMatcher(states)
            }
        );


        //
        // Bloodhound engine
        //

        // Constructs the suggestion engine
        var states = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,

            // `states` is an array of state names defined in "The Basics"
            local: $.map(states, function(state) { return { value: state }; })
        });

        // Initialize engine
        states.initialize();

        // Initialize
        $('.typeahead-bloodhound').typeahead(
            {
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'states',
                displayKey: 'value',

                // `ttAdapter` wraps the suggestion engine in an adapter that
                // is compatible with the typeahead jQuery plugin
                source: states.ttAdapter()
            }
        );


        //
        // Prefetched data
        //

        // Constructs the suggestion engine
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            limit: 10,
            prefetch: {

                // url points to a json file that contains an array of country names, see
                // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
                url: '../../../../global_assets/demo_data/typeahead/countries.json',

                // the json file contains an array of strings, but the Bloodhound
                // suggestion engine expects JavaScript objects so this converts all of
                // those strings
                filter: function(list) {
                    return $.map(list, function(country) { return { name: country }; });
                }
            }
        });

        // Initialize engine
        countries.initialize();

        // Passing in `null` for the `options` arguments will result in the default options being used
        $('.typeahead-prefetched').typeahead(null, {
            name: 'countries',
            displayKey: 'name',

            // `ttAdapter` wraps the suggestion engine in an adapter that
            // is compatible with the typeahead jQuery plugin
            source: countries.ttAdapter()
        });


        //
        // Remote data
        //

        // Constructs the suggestion engine
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '../../../../global_assets/demo_data/typeahead/movies.json',
            remote: '../../../../global_assets/json/queries/%QUERY.json'
        });

        // Initialize engine
        bestPictures.initialize();

        // Initialize
        $('.typeahead-remote').typeahead(null, {
            name: 'best-pictures',
            displayKey: 'value',
            source: bestPictures.ttAdapter()
        });


        //
        // Custom templates
        //

        // Initialize with opitons
        $('.typeahead-custom-templates').typeahead(null, {
            name: 'best-pictures',
            displayKey: 'value',
            source: bestPictures.ttAdapter(),
            templates: {
                empty: [
                    '<div class="empty-message px-2 text-center text-muted">',
                    'Unable to find any Best Picture winners that match the current query',
                    '</div>'
                ].join('\n'),
                suggestion: Handlebars.compile('<div><strong>{{value}}</strong> – {{year}}</div>')
            }
        });


        //
        // Multiple datasets
        //

        // Constructs the suggestion engine for 1st dataset
        var nbaTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '../../../../global_assets/demo_data/typeahead/nba.json'
        });

        // Constructs the suggestion engine for 2nd dataset
        var nhlTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '../../../../global_assets/demo_data/typeahead/nhl.json'
        });

        // Initialize engines
        nbaTeams.initialize();
        nhlTeams.initialize();

        // Initialize 1st dataset
        $('.typeahead-multiple-datasets').typeahead(
            {
                highlight: true
            },
            {
                name: 'group',
                displayKey: 'team',
                source: nbaTeams.ttAdapter(),
                templates: {
                    header: '<span class="tt-heading">NBA Teams</span>'
                }
            },
            {
                name: 'group',
                displayKey: 'team',
                source: nhlTeams.ttAdapter(),
                templates: {
                    header: '<span class="tt-heading">NHL Teams</span>'
                }
            }
        );


        //
        // Dropdown height
        //

        // Initialize with options
        $('.typeahead-scrollable-menu').typeahead(null, {
            name: 'countries',
            displayKey: 'name',
            source: countries.ttAdapter()
        });


        //
        // RTL support
        //

        // Constructs the suggestion engine
        var arabicPhrases = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('word'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: [
                { word: 'الإنجليزية' },
                { word: 'نعم' },
                { word: 'لا' },
                { word: 'مرحبا' },
                { word: 'أهلا' }
            ]
        });

        // Initialize engine
        arabicPhrases.initialize();

        // Initialize
        $('.typeahead-rtl-support').typeahead(
            {
                hint: false
            },
            {
                name: 'arabic-phrases',
                displayKey: 'word',
                source: arabicPhrases.ttAdapter()
            }
        );
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentInputFormatter();
            _componentAutosize();
            _componentMaxlength();
            _componentTypeahead();
        }
    }
}();

var InputsBasic = function () {


    //
    // Setup module components
    //

    // Uniform
    var _componentUniform = function() {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // File input
        $('.form-control-uniform').uniform();

        // Custom select
        $('.form-control-uniform-custom').uniform({
            fileButtonClass: 'action btn bg-blue',
            selectClass: 'uniform-select bg-pink-400 border-pink-400'
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentUniform();
        }
    }
}();



// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DatatableBasic.init();
    ExtendedFormControls.init();
    InputsBasic.init();
});