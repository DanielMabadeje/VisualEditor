<?php
$messages = array();

/** English
 * @author Trevor Parscal
 */
$messages['en'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Visual editor for MediaWiki',
	'visualeditor-preference-enable' => 'Enable VisualEditor (only in the [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|main]] and [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|user]] namespaces)',
	'visualeditor-mainnamespacepagelink' => 'Project:Main namespace',
	'visualeditor-usernamespacepagelink' => 'Project:User namespace',
	'visualeditor-notification-saved' => 'Your changes to $1 have been saved.',
	'visualeditor-notification-created' => '$1 has been created.',
	'visualeditor-notification-restored' => '$1 has been restored.',
	'visualeditor-notification-reported' => 'Your problem has been reported. Thank you.',
	'visualeditor-ca-editsource' => 'Edit source',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Review and save',
	'visualeditor-savedialog-title-review' => 'Review your changes',
	'visualeditor-savedialog-title-report' => 'Report a problem',
	'visualeditor-savedialog-title-save' => 'Save your changes',
	'visualeditor-savedialog-label-review-wrong' => 'Something is wrong',
	'visualeditor-savedialog-label-review-good' => 'Looks good to me',
	'visualeditor-savedialog-label-report' => 'Report problem',
	'visualeditor-savedialog-label-create' => 'Create page',
	'visualeditor-savedialog-label-save' => 'Save page',
	'visualeditor-savedialog-label-restore' => 'Restore page',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|notice|notices}}',
	'visualeditor-feedback-tool' => 'Leave feedback',
	'tooltip-ca-ve-edit' => 'Edit this page with VisualEditor',
	'accesskey-ca-ve-edit' => '',
	'visualeditor-inspector-title' => 'Inspect',
	'visualeditor-linkinspector-title' => 'Hyperlink',
	'visualeditor-linkinspector-label-pagetitle' => 'Page title',
	'visualeditor-linkinspector-suggest-existing-page' => 'Existing page',
	'visualeditor-linkinspector-suggest-new-page' => 'New page',
	'visualeditor-linkinspector-suggest-external-link' => 'Web link',
	'visualeditor-formatdropdown-title' => 'Change format',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraph',
	'visualeditor-formatdropdown-format-heading1' => 'Heading 1',
	'visualeditor-formatdropdown-format-heading2' => 'Heading 2',
	'visualeditor-formatdropdown-format-heading3' => 'Heading 3',
	'visualeditor-formatdropdown-format-heading4' => 'Heading 4',
	'visualeditor-formatdropdown-format-heading5' => 'Heading 5',
	'visualeditor-formatdropdown-format-heading6' => 'Heading 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformatted',
	'visualeditor-annotationbutton-bold-tooltip' => 'Bold $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Command + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Control + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Italic $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Command + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Control + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Link $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Command + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Control + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Increase indentation $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger'=>'(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Decrease indentation $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger'=>'(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Numbered list',
	'visualeditor-listbutton-bullet-tooltip' => 'Bullet list',
	'visualeditor-clearbutton-tooltip' => 'Clear formatting',
	'visualeditor-historybutton-undo-tooltip' => 'Undo $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Command + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Control + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Redo $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Command + Shift + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Control + Shift + z)',
	'visualeditor-inspector-close-tooltip' => 'Close',
	'visualeditor-inspector-remove-tooltip' => 'Remove',
	'visualeditor-viewpage-savewarning' => 'Are you sure you want to go back to view mode without saving first?',
	'visualeditor-loadwarning' => 'Error loading data from server: $1. Would you like to retry?',
	'visualeditor-differror' => 'Error loading data from server: $1.',
	'visualeditor-saveerror' => 'Error saving data to server: $1.',
	'visualeditor-editconflict' => 'Your changes could not be saved because of an edit conflict. Would you like to resolve the conflict manually?',
	'visualeditor-editsummary' => 'Describe what you changed',
	'visualeditor-problem' => 'Describe what went wrong',
	'visualeditor-aliennode-tooltip' => 'Sorry, this element cannot be edited using the VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Edit made using the [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'You are using an alpha version of the [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. It may be slow and make erroneous changes - please check each edit that you make.',
	'visualeditor-report-notice' => 'I understand that by clicking to submit I will transmit my changes and my feedback which will be stored for analysis. I agree to provide feedback in accordance with the [[{{MediaWiki:Visualeditor-report-link}}|Terms of Use]].',
	'visualeditor-report-link' => 'foundation:Terms of Use',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Beta16
 * @author Erik Moeller
 * @author Jdforrester
 * @author Lloffiwr
 * @author Nike
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 * @author Trevor Parscal
 */
$messages['qqq'] = array(
	'visualeditor' => 'The name of the VisualEditor extension',
	'visualeditor-desc' => '{{desc|name=Visual Editor|url=http://www.mediawiki.org/wiki/Extension:VisualEditor}}',
	'visualeditor-preference-enable' => 'Label for the user preference to enable the VisualEditor.
Links are in {{msg-mw|Visualeditor-mainnamespacepagelink}} and {{msg-mw|visualeditor-usernamespacepagelink}}.',
	'visualeditor-mainnamespacepagelink' => 'Name of a page describing the main namespace (NS0) in this project.
{{doc-important|Don’t translate “Project”; it is automatically converted to the wiki’s project namespace.}}',
	'visualeditor-usernamespacepagelink' => 'Name of a page describing the user namespace (NS2) in this project.
{{doc-important|Don’t translate “Project”; it is automatically converted to the wiki’s project namespace.}}',
	'visualeditor-notification-saved' => 'Shown after a user saves a page, $1 is a page name.',
	'visualeditor-notification-created' => 'Shown after a user creates a page, $1 is a page name.',
	'visualeditor-notification-restored' => 'Shown after a user restores a page to a previous revision. Parameters:
* $1 is a page name.',
	'visualeditor-notification-reported' => 'Thank you message shown after a user reports a problematic page edit.',
	'visualeditor-ca-editsource' => '{{Optional}}
Text for the edit source link in the tab dropdown
{{Identical|visualeditor}}',
	'visualeditor-ca-ve-edit' => '{{Optional}}
Link text of the dedicated VisualEditor Edit tab.
{{Identical|visualeditor}}',
	'visualeditor-ca-ve-create' => '{{Optional}}
	Link text of the dedicated VisualEditor Create tab.
{{Identical|visualeditor}}',
	'visualeditor-toolbar-savedialog' => 'Label text for button to trigger review and save interface',
	'visualeditor-savedialog-title-review' => 'Title for reviewing slide',
	'visualeditor-savedialog-title-report' => 'Title for reporting slide',
	'visualeditor-savedialog-title-save' => 'Title for saving slide',
	'visualeditor-savedialog-label-review-wrong' => 'Label for button to trigger report dialog',
	'visualeditor-savedialog-label-review-good' => 'Label for button to progress to save dialog',
	'visualeditor-savedialog-label-report' => 'Label for button to trigger report',
	'visualeditor-savedialog-label-create' => 'Label text for save button when the user is creating a new page',
	'visualeditor-savedialog-label-save' => 'Label text for save button when the user is editing a current revision of an extant page',
	'visualeditor-savedialog-label-restore' => 'Label text for save button when the user is editing a previous revision',
	'visualeditor-editnotices-tool' => 'Text of tool in the toolbar that shows edit notices (such as [[MediaWiki:editnotice-0]] and [[MediaWiki:editnotice-8/en]]) as a pop-up',
	'visualeditor-feedback-tool' => 'Text of tool in the toolbar that lets user provide feedback',
	'tooltip-ca-ve-edit' => 'Tooltip of the dedicated VisualEditor Edit tab.',
	'accesskey-ca-ve-edit' => '{{Ignore}}',
	'visualeditor-inspector-title' => 'Title of an unnamed inspector',
	'visualeditor-linkinspector-title' => 'Title of the link inspector dialog',
	'visualeditor-linkinspector-label-pagetitle' => 'Label for the text field that holds the link target in the link inspector',
	'visualeditor-linkinspector-suggest-existing-page' => 'Label for suggested existing pages in the link inspector',
	'visualeditor-linkinspector-suggest-new-page' => 'Label for a new page in the link inspector',
	'visualeditor-linkinspector-suggest-external-link' => 'Label for an external (Web) link in the link inspector',
	'visualeditor-formatdropdown-title' => 'This is a tooltip for the drop-down box for choosing the formatting style of the selected text, such as "Heading 1", "Heading 2" or "Plain text". (This is not related to "file format" or "data format", such as "Wikitext", "HTML", "PDF" etc.)',
	'visualeditor-formatdropdown-format-paragraph' => 'Item in the formatting dropdown for paragraphs (normal text)',
	'visualeditor-formatdropdown-format-heading1' => 'Item in the formatting dropdown for a level 1 heading',
	'visualeditor-formatdropdown-format-heading2' => 'Item in the formatting dropdown for a level 2 heading',
	'visualeditor-formatdropdown-format-heading3' => 'Item in the formatting dropdown for a level 3 heading',
	'visualeditor-formatdropdown-format-heading4' => 'Item in the formatting dropdown for a level 4 heading',
	'visualeditor-formatdropdown-format-heading5' => 'Item in the formatting dropdown for a level 5 heading',
	'visualeditor-formatdropdown-format-heading6' => 'Item in the formatting dropdown for a level 6 heading',
	'visualeditor-formatdropdown-format-preformatted' => 'Item in the formatting dropdown for preformatted text',
	'visualeditor-annotationbutton-bold-tooltip' => 'Tooltip string for bold button. Parameters:
* $1 is keyboard trigger; {{msg-mw|Visualeditor-annotationbutton-bold-tooltip-trigger-mac}} or {{msg-mw|Visualeditor-annotationbutton-bold-tooltip-trigger-pc}}',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => 'Bold button keyboard shortcut string for mac',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => 'Bold button keyboard shortcut string for pc',
	'visualeditor-annotationbutton-italic-tooltip' => 'Tooltip string for italic button. Parameters:
* $1 is keyboard trigger; {{msg-mw|Visualeditor-annotationbutton-italic-tooltip-trigger-mac}} or {{msg-mw|Visualeditor-annotationbutton-italic-tooltip-trigger-pc}}',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => 'Italic button keyboard shortcut string for mac',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => 'Italic button keyboard shortcut string for pc',
	'visualeditor-annotationbutton-link-tooltip' => 'Tooltip string for link button. Parameters:
* $1 is keyboard trigger; {{msg-mw|Visualeditor-annotationbutton-link-tooltip-trigger-mac}} or {{msg-mw|Visualeditor-annotationbutton-link-tooltip-trigger-pc}}',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => 'Link button keyboard shortcut string for mac',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => 'Link button keyboard shortcut string for pc',
	'visualeditor-indentationbutton-indent-tooltip' => 'Tooltip string for list indent button. Parameters:
* $1 is keyboard trigger {{msg-mw|Visualeditor-indentationbutton-indent-tooltip-trigger}}',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => 'List indent keyboard shortcut string for list indent',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Tooltip string for list outdent button. Parameters:
* $1 is keyboard trigger {{msg-mw|Visualeditor-indentationbutton-outdent-tooltip-trigger}}',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => 'List outdent button keyboard shortcut string for list outdent',
	'visualeditor-listbutton-number-tooltip' => 'Tooltip for the numbered list button',
	'visualeditor-listbutton-bullet-tooltip' => 'Tooltip for the bullet list button',
	'visualeditor-clearbutton-tooltip' => 'Tooltip for the clear formatting button',
	'visualeditor-historybutton-undo-tooltip' => 'Tooltip string for the undo button. Parameters:
* $1 is keyboard trigger; {{msg-mw|Visualeditor-historybutton-undo-tooltip-trigger-mac}} or {{msg-mw|Visualeditor-historybutton-undo-tooltip-trigger-pc}}',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => 'Undo button keyboard shortcut string for mac',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => 'Undo button keyboard shortcut for pc',
	'visualeditor-historybutton-redo-tooltip' => 'Tooltip string for the redo button. Parameters:
* $1 is keyboard trigger; {{msg-mw|Visualeditor-historybutton-redo-tooltip-trigger-mac}} or {{msg-mw|Visualeditor-historybutton-redo-tooltip-trigger-pc}}',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => 'Redo button keyboard shortcut string for mac',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => 'Redo button keyboard shortcut string for pc',
	'visualeditor-inspector-close-tooltip' => 'Tooltip for the button to close an inspector',
	'visualeditor-inspector-remove-tooltip' => 'Tooltip for the button to remove an annotation in an inspector',
	'visualeditor-viewpage-savewarning' => 'Text shown when the user tries to leave the editor without saving their changes',
	'visualeditor-loadwarning' => 'Text shown when the editor fails to load properly. $1 is the error message from the server, in English.',
	'visualeditor-differror' => 'Text shown when the editor fails to load the diff. Parameters:
* $1 is an error message, in English.',
	'visualeditor-saveerror' => 'Text shown when the editor fails to save properly. Parameters:
* $1 is an error message, in English.',
	'visualeditor-editconflict' => 'Alert message when saving a page causes an edit conflict',
	'visualeditor-editsummary' => 'Label for edit summary box',
	'visualeditor-problem' => 'Label for problem description box',
	'visualeditor-aliennode-tooltip' => 'Tooltip for items that the VisualEditor cannot edit',
	'tag-visualeditor' => 'Short description of the visualeditor tag ({{msg-mw|Tag-visualeditor}}). Shown on lists of changes (history, recentchanges, etc.) for each edit made using VisualEditor.',
	'tag-visualeditor-description' => 'Long description of the visualeditor tag ({{msg-mw|Tag-visualeditor}}). Shown on [[Special:Tags]]',
	'visualeditor-descriptionpagelink' => 'Name of a page describing the use of the VisualEditor in this project.
{{doc-important|Don’t translate “Project”; it is automatically converted to the wiki’s project namespace.}}',
	'visualeditor-alphawarning' => 'Edit notice shown when the VisualEditor loads, warning users that the software may have issues',
	'visualeditor-report-notice' => 'Notice to user that their data will be sent for analysis.
	Link is in {{msg-mw|Visualeditor-report-link}}.',
	'visualeditor-report-link' => '{{optional}}
Interwiki link to the terms of use for this project: https://wikimediafoundation.org/wiki/Terms_of_Use

Do not translate. Only add a language code when a translations of above page exists for your language.

Possible entry for German: "foundation:Terms of Use/de"',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'visualeditor-formatdropdown-format-paragraph' => 'দফা',
	'visualeditor-formatdropdown-format-heading1' => 'শিৰোনাম ১',
	'visualeditor-formatdropdown-format-heading2' => 'শিৰোনাম ২',
	'visualeditor-formatdropdown-format-heading3' => 'শিৰোনাম ৩',
	'visualeditor-formatdropdown-format-heading4' => 'শিৰোনাম ৪',
	'visualeditor-formatdropdown-format-heading5' => 'শিৰোনাম ৫',
	'visualeditor-formatdropdown-format-heading6' => 'শিৰোনাম ৬',
	'visualeditor-annotationbutton-bold-tooltip' => 'গাঢ়', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'হেলনীয়া', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'সংযোগ', # Fuzzy
	'visualeditor-historybutton-undo-tooltip' => 'পূৰ্ববত কৰক', # Fuzzy
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Editor visual pa MediaWiki',
	'visualeditor-preference-enable' => "Activar l'editor visual (sólo nos espacios de nomes [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]] y [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|d'usuariu]])",
	'visualeditor-mainnamespacepagelink' => 'Project:Espaciu principal',
	'visualeditor-usernamespacepagelink' => "Project:Espaciu de nomes d'usuariu",
	'visualeditor-notification-saved' => 'Se guardaron los cambeos fechos en "$1".',
	'visualeditor-notification-created' => 'Creóse "$1".',
	'visualeditor-notification-restored' => 'Restauróse $1.',
	'visualeditor-notification-reported' => "S'informó del to problema. Munches gracies.",
	'visualeditor-ca-editsource' => 'Editar la fonte',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-ca-ve-create' => 'Editor visual',
	'visualeditor-toolbar-savedialog' => 'Revisar y guardar',
	'visualeditor-savedialog-title-review' => 'Revisar los cambios',
	'visualeditor-savedialog-title-report' => "Informar d'un problema",
	'visualeditor-savedialog-title-save' => 'Guardar los cambios',
	'visualeditor-savedialog-label-review-wrong' => 'Daqué ta mal',
	'visualeditor-savedialog-label-review-good' => 'Creo que ta bien',
	'visualeditor-savedialog-label-report' => "Informar d'un problema",
	'visualeditor-savedialog-label-create' => 'Crear páxina',
	'visualeditor-savedialog-label-save' => 'Guardar la páxina',
	'visualeditor-savedialog-label-restore' => 'Restaurar la páxina',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|avisu|avisos}}',
	'visualeditor-feedback-tool' => 'Dexar un comentariu',
	'tooltip-ca-ve-edit' => 'Editar esta páxina con VisualEditor',
	'visualeditor-inspector-title' => 'Inspeicionar',
	'visualeditor-linkinspector-title' => 'Hiperenllaz',
	'visualeditor-linkinspector-label-pagetitle' => 'Títulu de la páxina',
	'visualeditor-linkinspector-suggest-existing-page' => 'Páxina esistente',
	'visualeditor-linkinspector-suggest-new-page' => 'Páxina nueva',
	'visualeditor-linkinspector-suggest-external-link' => 'Enllaz web',
	'visualeditor-formatdropdown-title' => 'Cambiar de formatu',
	'visualeditor-formatdropdown-format-paragraph' => 'Párrafu',
	'visualeditor-formatdropdown-format-heading1' => 'Testera 1',
	'visualeditor-formatdropdown-format-heading2' => 'Testera 2',
	'visualeditor-formatdropdown-format-heading3' => 'Testera 3',
	'visualeditor-formatdropdown-format-heading4' => 'Testera 4',
	'visualeditor-formatdropdown-format-heading5' => 'Testera 5',
	'visualeditor-formatdropdown-format-heading6' => 'Testera 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Con formatu previu',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negrina $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Comandu + n)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + n)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursiva $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Comandu + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Enllaz $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Comandu + l)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + l)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar la sangría $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Disminuir la sangría $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Mayús + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Llista numberada',
	'visualeditor-listbutton-bullet-tooltip' => 'Llista con viñetes',
	'visualeditor-clearbutton-tooltip' => 'Quitar el formatu',
	'visualeditor-historybutton-undo-tooltip' => 'Desfacer $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Comandu + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Refacer $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Comandu + Mayús + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Mayús + z)',
	'visualeditor-inspector-close-tooltip' => 'Zarrar',
	'visualeditor-inspector-remove-tooltip' => 'Desaniciar',
	'visualeditor-viewpage-savewarning' => '¿Seguro que quies volver al mou de visualización ensin guardar primero?',
	'visualeditor-loadwarning' => "Error al cargar los datos dende'l sirvidor: $1. ¿Quies volver a intentalo?",
	'visualeditor-differror' => 'Error al cargar los datos del sirvidor: $1.',
	'visualeditor-saveerror' => 'Error al guardar los datos nel sirvidor: $1.',
	'visualeditor-editconflict' => "Nun se pudieron guardar los cambios por un conflictu d'edición. ¿Quies resolver el conflictu de mou manual?",
	'visualeditor-editsummary' => 'Describi lo que camudasti',
	'visualeditor-problem' => 'Describi lo que nun foi bien',
	'visualeditor-aliennode-tooltip' => 'Sentimoslo, esti elementu nun se pue editar usando VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Etiqueta]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Edición fecha usando [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Tas usando una versión alfa de [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Pue resultar lentu y facer cambios enquivocaos - por favor, comprueba toles ediciones que faigas.',
	'visualeditor-report-notice' => "Entiendo que al calcar unviar tresmitiré los mios cambios y comentarios que se guardarán p'analizalos. Toi d'alcuerdu con dar información en cumplimientu de los [[{{MediaWiki:Visualeditor-report-link}}|Términos d'usu]].",
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'MediaWiki өсөн визуаль мөхәррирләгес',
	'visualeditor-ca-editsource' => 'Сығанаҡты мөхәррирләргә',
	'visualeditor-linkinspector-title' => 'Һылтанманы мөхәррирләргә', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Бит исеме',
	'visualeditor-formatdropdown-title' => 'Форматты үҙгәртергә',
	'visualeditor-formatdropdown-format-paragraph' => 'Параграф',
	'visualeditor-formatdropdown-format-heading1' => 'Башлыҡ 1',
	'visualeditor-formatdropdown-format-heading2' => 'Башлыҡ 2',
	'visualeditor-formatdropdown-format-heading3' => 'Башлыҡ 3',
	'visualeditor-formatdropdown-format-heading4' => 'Башлыҡ 4',
	'visualeditor-formatdropdown-format-heading5' => 'Башлыҡ 5',
	'visualeditor-formatdropdown-format-heading6' => 'Башлыҡ 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Әҙер формат',
	'visualeditor-annotationbutton-bold-tooltip' => 'Ҡалын', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Ҡыя', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Һылтанма', # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'visualeditor' => 'Візуальны рэдактар',
	'visualeditor-desc' => 'Візуальны рэдактар для MediaWiki',
	'visualeditor-preference-enable' => 'Уключыць візуальны рэдактар (толькі ў [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|асноўнай прасторы]] і [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|прасторы ўдзельнікаў]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Асноўная прастора',
	'visualeditor-usernamespacepagelink' => 'Project:Старонка ўдзельніка',
	'visualeditor-notification-saved' => 'Вашыя зьмены ў «$1» захаваныя.',
	'visualeditor-notification-created' => 'Старонка «$1» створаная.',
	'visualeditor-notification-restored' => '«$1» адноўлена.',
	'visualeditor-notification-reported' => 'Зьвесткі пра вашую праблему адпраўленыя. Дзякуй.',
	'visualeditor-ca-editsource' => 'Рэдагаваць крыніцу',
	'visualeditor-ca-ve-edit' => 'Візуальны рэдактар',
	'visualeditor-ca-ve-create' => 'Візуальны рэдактар',
	'visualeditor-toolbar-savedialog' => 'Праверыць і захаваць',
	'visualeditor-savedialog-title-review' => 'Праверыць зьмены',
	'visualeditor-savedialog-title-report' => 'Паведаміць пра праблему',
	'visualeditor-savedialog-title-save' => 'Захаваць зьмены',
	'visualeditor-savedialog-label-review-wrong' => 'Нешта ня так',
	'visualeditor-savedialog-label-review-good' => 'Як на мяне, выглядае добра',
	'visualeditor-savedialog-label-report' => 'Паведаміць пра праблему',
	'visualeditor-savedialog-label-create' => 'Стварыць старонку',
	'visualeditor-savedialog-label-save' => 'Захаваць старонку',
	'visualeditor-savedialog-label-restore' => 'Аднавіць старонку',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|паведамленьне|паведамленьні|паведамленьняў}}',
	'visualeditor-feedback-tool' => 'Пакінуць водгук',
	'tooltip-ca-ve-edit' => 'Рэдагаваць гэтую старонку ў Візуальным рэдактары',
	'visualeditor-inspector-title' => 'Дасьледваць',
	'visualeditor-linkinspector-title' => 'Гіпэрспасылка',
	'visualeditor-linkinspector-label-pagetitle' => 'Назва старонкі',
	'visualeditor-linkinspector-suggest-existing-page' => 'Існуючая старонка',
	'visualeditor-linkinspector-suggest-new-page' => 'Новая старонка',
	'visualeditor-linkinspector-suggest-external-link' => 'Вэб-спасылка',
	'visualeditor-formatdropdown-title' => 'Зьмяніць фарматаваньне',
	'visualeditor-formatdropdown-format-paragraph' => 'Параграф',
	'visualeditor-formatdropdown-format-heading1' => 'Загаловак 1',
	'visualeditor-formatdropdown-format-heading2' => 'Загаловак 2',
	'visualeditor-formatdropdown-format-heading3' => 'Загаловак 3',
	'visualeditor-formatdropdown-format-heading4' => 'Загаловак 4',
	'visualeditor-formatdropdown-format-heading5' => 'Загаловак 5',
	'visualeditor-formatdropdown-format-heading6' => 'Загаловак 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Аформлены',
	'visualeditor-annotationbutton-bold-tooltip' => 'Тоўсты', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Курсіў', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Спасылка', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Павялічыць водступ', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Паменшыць водступ', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Нумараваны сьпіс',
	'visualeditor-listbutton-bullet-tooltip' => 'Маркіраваны сьпіс',
	'visualeditor-clearbutton-tooltip' => 'Прыбраць афармленьне',
	'visualeditor-historybutton-undo-tooltip' => 'Скасаваць', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Узнавіць', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Зачыніць',
	'visualeditor-inspector-remove-tooltip' => 'Выдаліць',
	'visualeditor-viewpage-savewarning' => 'Вы ўпэўненыя, што жадаеце перайсьці ў рэжым прагляду без папярэдняга захаваньня?',
	'visualeditor-loadwarning' => 'Памылка ў час загрузкі зьвестак з сэрвэру: $1. Жадаеце паўтарыць?',
	'visualeditor-differror' => 'Памылка ў час атрыманьня зьвестак з сэрвэру: $1.',
	'visualeditor-saveerror' => 'Памылка ў час захаваньня зьвестак на сэрвэры: $1.',
	'visualeditor-editconflict' => 'Не атрымалася захаваць вашыя зьмены з-за канфлікту рэдагаваньняў. Ці не жадаеце разьвязаць канфлікт уласнаруч?',
	'visualeditor-editsummary' => 'Апішыце вашыя зьмены',
	'visualeditor-problem' => 'Апішыце, што здарылася',
	'visualeditor-aliennode-tooltip' => 'Даруйце, у Візуальным рэдактары гэты элемэнт зьмяніць немагчыма',
	'tag-visualeditor' => '[[Special:Tags|Тэг]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Праўка зробленая празь [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Візуальны рэдактар]]',
	'visualeditor-descriptionpagelink' => 'Project:Візуальны рэдактар',
);

/** Bulgarian (български)
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'visualeditor-annotationbutton-link-tooltip' => 'Препратка', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Затваряне',
	'visualeditor-inspector-remove-tooltip' => 'Премахване',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'visualeditor' => 'ভিজ্যুয়ালএডিটর',
	'visualeditor-desc' => 'মিডিয়াউইকির জন্য ভিজ্যুয়াল এডিটর',
	'visualeditor-ca-editsource' => 'উৎস সম্পাদনা',
	'visualeditor-ca-ve-edit' => 'ভিজ্যুয়ালএডিটর',
	'visualeditor-ca-ve-create' => 'ভিজ্যুয়ালএডিটর',
	'visualeditor-savedialog-label-create' => 'পাতা তৈরি',
	'visualeditor-savedialog-label-save' => 'পাতা সংরক্ষণ',
	'visualeditor-linkinspector-label-pagetitle' => 'পাতার শিরোনাম',
	'visualeditor-linkinspector-suggest-new-page' => 'নতুন পাতা',
	'visualeditor-linkinspector-suggest-external-link' => 'ওয়েব লিঙ্ক',
	'visualeditor-formatdropdown-format-paragraph' => 'প্যারাগ্রাফ',
	'visualeditor-formatdropdown-format-heading1' => 'শিরনামা ১',
	'visualeditor-formatdropdown-format-heading2' => 'শিরনামা ২',
	'visualeditor-formatdropdown-format-heading3' => 'শিরনামা ৩',
	'visualeditor-formatdropdown-format-heading4' => 'শিরনামা ৪',
	'visualeditor-formatdropdown-format-heading5' => 'শিরনামা ৫',
	'visualeditor-formatdropdown-format-heading6' => 'শিরনামা ৬',
	'visualeditor-annotationbutton-bold-tooltip' => 'গাঢ়', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'ইটালিক', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'লিংক', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'সংখ্যায়িত তালিকা',
	'visualeditor-listbutton-bullet-tooltip' => 'বুলেটকৃত তালিকা',
	'visualeditor-historybutton-undo-tooltip' => 'পূর্বাবস্থায় ফেরাও', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'বন্ধ',
	'visualeditor-inspector-remove-tooltip' => 'অপসারণ',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-ca-editsource' => 'Kemmañ ar vammenn',
	'visualeditor-linkinspector-title' => 'Kemmañ al liamm', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Anv ar bajenn',
	'visualeditor-formatdropdown-title' => 'Kemmañ ar furmad',
	'visualeditor-formatdropdown-format-paragraph' => 'Rannbennad',
	'visualeditor-formatdropdown-format-heading1' => 'Titl 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titl 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titl 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titl 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titl 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titl 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Rakfurmadet',
	'visualeditor-annotationbutton-bold-tooltip' => 'Tev', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Italek', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Liamm', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Kreskiñ an endantadur', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Digreskiñ an endantadur', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Roll niverennet',
	'visualeditor-listbutton-bullet-tooltip' => 'Roll padelliget',
	'visualeditor-clearbutton-tooltip' => 'Riñsañ ar furmata',
	'visualeditor-historybutton-undo-tooltip' => 'Dizober', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Adober', # Fuzzy
);

/** Catalan (català)
 * @author Vriullop
 */
$messages['ca'] = array(
	'visualeditor-desc' => 'Editor visual per a MediaWiki',
	'visualeditor-preference-enable' => "Habilita l'editor visual (només en els espais de noms [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]] i d'[[{{MediaWiki:Visualeditor-usernamespacepagelink}}|usuari]])",
	'visualeditor-mainnamespacepagelink' => 'Project:Espai principal',
	'visualeditor-usernamespacepagelink' => "Project:Espai d'usuari",
	'visualeditor-notification-saved' => 'Els canvis a $1 han estat desats.',
	'visualeditor-notification-created' => '$1 ha estat creat.',
	'visualeditor-notification-restored' => '$1 ha estat restaurada.',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-toolbar-savedialog' => 'Revisa i desa',
	'visualeditor-savedialog-title-review' => 'Reviseu els canvis',
	'visualeditor-savedialog-title-save' => 'Desant el canvis',
	'visualeditor-savedialog-label-review-wrong' => 'No ha anat bé',
	'visualeditor-savedialog-label-review-good' => 'Està bé',
	'visualeditor-savedialog-label-save' => 'Desa la pàgina',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|avís|avisos}}',
	'visualeditor-feedback-tool' => 'Comentaris',
	'visualeditor-formatdropdown-format-paragraph' => 'Paràgraf',
	'visualeditor-formatdropdown-format-heading1' => 'Encapçalament 1',
	'visualeditor-formatdropdown-format-heading2' => 'Encapçalament 2',
	'visualeditor-formatdropdown-format-heading3' => 'Encapçalament 3',
	'visualeditor-formatdropdown-format-heading4' => 'Encapçalament 4',
	'visualeditor-formatdropdown-format-heading5' => 'Encapçalament 5',
	'visualeditor-formatdropdown-format-heading6' => 'Encapçalament 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negreta', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursiva', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Enllaç', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Augmenta el sagnat', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Disminueix el sagnat', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Llista numerada',
	'visualeditor-listbutton-bullet-tooltip' => 'Llista amb pics',
	'visualeditor-historybutton-undo-tooltip' => 'Desfés', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refés', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Esteu segurs que voleu tornar a la pàgina sense desar abans?',
	'visualeditor-editsummary' => 'Descriviu el que heu canviat',
	'visualeditor-aliennode-tooltip' => "Disculpeu, aquest element no es pot modificar amb l'editor visual",
	'visualeditor-alphawarning' => "Esteu utilitzant una versió alfa de l'[[{{MediaWiki:Visualeditor-descriptionpagelink}}|editor visual]]. Pot ser lent i fer canvis erronis - comproveu tots els canvis fets.",
);

/** Czech (česky)
 * @author Chmee2
 */
$messages['cs'] = array(
	'visualeditor' => 'WYSIWYG editor',
	'visualeditor-desc' => 'WYSIWYG editor pro MediaWiki',
	'visualeditor-ca-editsource' => 'Upravit zdroj',
	'visualeditor-linkinspector-title' => 'Upravit odkaz', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Název stránky',
	'visualeditor-formatdropdown-title' => 'Změnit formát',
	'visualeditor-formatdropdown-format-paragraph' => 'Odstavec',
	'visualeditor-formatdropdown-format-heading1' => 'Nadpis 1',
	'visualeditor-formatdropdown-format-heading2' => 'Nadpis 2',
	'visualeditor-formatdropdown-format-heading3' => 'Nadpis 3',
	'visualeditor-formatdropdown-format-heading4' => 'Nadpis 4',
	'visualeditor-formatdropdown-format-heading5' => 'Nadpis 5',
	'visualeditor-formatdropdown-format-heading6' => 'Nadpis 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Předformátovaný',
	'visualeditor-annotationbutton-bold-tooltip' => 'Tučné', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kurzíva', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Odkaz', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Zvětšit odsazení', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Zmenšit odsazení', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Číslovaný seznam',
	'visualeditor-listbutton-bullet-tooltip' => 'Seznam s odrážkami',
	'visualeditor-clearbutton-tooltip' => 'Vymazat formátování',
	'visualeditor-historybutton-undo-tooltip' => 'Zpět', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Znovu', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Opravdu se chcete vrátit k režimu zobrazení bez uložení?',
);

/** German (Deutsch)
 * @author G.Hagedorn
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'visualeditor' => 'WYSIWYG-Editor',
	'visualeditor-desc' => 'Ermöglicht einen WYSIWYG-Editor',
	'visualeditor-preference-enable' => 'VisualEditor (WYSIWYG) aktivieren (nur im [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|Artikel-]] und [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|Benutzernamensraum]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Artikelnamensraum',
	'visualeditor-usernamespacepagelink' => 'Project:Benutzernamensraum',
	'visualeditor-notification-saved' => 'Deine Änderungen an $1 wurden gespeichert.',
	'visualeditor-notification-created' => '$1 wurde erstellt.',
	'visualeditor-notification-restored' => '„$1“ wurde wiederhergestellt.',
	'visualeditor-notification-reported' => 'Dein Problem wurde berichtet. Vielen Dank.',
	'visualeditor-ca-editsource' => 'Quelltext bearbeiten',
	'visualeditor-ca-ve-edit' => 'WYSIWYG-Editor',
	'visualeditor-ca-ve-create' => 'WYSIWYG-Editor',
	'visualeditor-toolbar-savedialog' => 'Überprüfen und speichern',
	'visualeditor-savedialog-title-review' => 'Änderungen überprüfen',
	'visualeditor-savedialog-title-report' => 'Ein Problem berichten',
	'visualeditor-savedialog-title-save' => 'Änderungen speichern',
	'visualeditor-savedialog-label-review-wrong' => 'Etwas ist schief gelaufen',
	'visualeditor-savedialog-label-review-good' => 'Sieht gut aus',
	'visualeditor-savedialog-label-report' => 'Problem berichten',
	'visualeditor-savedialog-label-create' => 'Seite erstellen',
	'visualeditor-savedialog-label-save' => 'Seite speichern',
	'visualeditor-savedialog-label-restore' => 'Seite wiederherstellen',
	'visualeditor-editnotices-tool' => '{{PLURAL:$1|Eine Notiz|$1 Notizen}}',
	'visualeditor-feedback-tool' => 'Rückmeldungen hinterlassen',
	'tooltip-ca-ve-edit' => 'Diese Seite mit dem WYSIWYG-Editor bearbeiten',
	'visualeditor-inspector-title' => 'Inspizieren',
	'visualeditor-linkinspector-title' => 'Hyperlink',
	'visualeditor-linkinspector-label-pagetitle' => 'Seitenname',
	'visualeditor-linkinspector-suggest-existing-page' => 'Vorhandene Seite',
	'visualeditor-linkinspector-suggest-new-page' => 'Neue Seite',
	'visualeditor-linkinspector-suggest-external-link' => 'Weblink',
	'visualeditor-formatdropdown-title' => 'Format ändern',
	'visualeditor-formatdropdown-format-paragraph' => 'Absatz',
	'visualeditor-formatdropdown-format-heading1' => 'Überschrift 1',
	'visualeditor-formatdropdown-format-heading2' => 'Überschrift 2',
	'visualeditor-formatdropdown-format-heading3' => 'Überschrift 3',
	'visualeditor-formatdropdown-format-heading4' => 'Überschrift 4',
	'visualeditor-formatdropdown-format-heading5' => 'Überschrift 5',
	'visualeditor-formatdropdown-format-heading6' => 'Überschrift 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Vorformatiert',
	'visualeditor-annotationbutton-bold-tooltip' => 'Fett $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(⌘ + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Strg + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiv $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(⌘ + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Strg + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Link $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(⌘ + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Strg + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Einzug vergrößern $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Einzug verkleinern $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Nummerierte Liste',
	'visualeditor-listbutton-bullet-tooltip' => 'Aufgezählte Liste',
	'visualeditor-clearbutton-tooltip' => 'Formatierungen entfernen',
	'visualeditor-historybutton-undo-tooltip' => 'Rückgängig machen $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(⌘ + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Strg + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Wiederholen $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(⌘ + Shift + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Strg + Shift + z)',
	'visualeditor-inspector-close-tooltip' => 'Schließen',
	'visualeditor-inspector-remove-tooltip' => 'Entfernen',
	'visualeditor-viewpage-savewarning' => 'Bist du sicher, dass du zum Ansichtsmodus wechseln möchtest, ohne vorher zu speichern?',
	'visualeditor-loadwarning' => 'Fehler beim Laden der Daten vom Server: $1. Soll der Vorgang erneut durchgeführt werden?',
	'visualeditor-differror' => 'Fehler beim Laden der Daten vom Server: $1.',
	'visualeditor-saveerror' => 'Fehler beim Speichern der Daten auf dem Server: $1.',
	'visualeditor-editconflict' => 'Deine Änderungen konnten aufgrund eines Bearbeitungskonflikts nicht gespeichert werden. Willst du den Konflikt manuell beheben?',
	'visualeditor-editsummary' => 'Beschreibe, was du geändert hast.',
	'visualeditor-problem' => 'Beschreibe, was schief gelaufen ist',
	'visualeditor-aliennode-tooltip' => 'Dieses Element kann leider nicht mit dem WYSIWYG-Editor bearbeitet werden.',
	'tag-visualeditor' => '[[Special:Tags|Markierungen]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|WYSIWYG-Editor]]',
	'tag-visualeditor-description' => 'Bearbeitet mit dem [[{{MediaWiki:Visualeditor-descriptionpagelink}}|WYSIWYG-Editor]]',
	'visualeditor-descriptionpagelink' => 'Project:WYSIWYG-Editor',
	'visualeditor-alphawarning' => 'Du benutzt eine Alpha-Version des [[{{MediaWiki:Visualeditor-descriptionpagelink}}|WYSIWYG-Editors]]. Er arbeitet teilweise noch langsam und kann fehlerhafte Änderungen erzeugen. Bitte überprüfe jede Bearbeitung, die du gemacht hast.',
	'visualeditor-report-notice' => 'Mit dem Klick auf „Speichern“ übermittle ich meine Änderungen und meine Rückmeldung, die zur Auswertung gespeichert wird. Ich stimme der Abgabe meiner Rückmeldung in Übereinstimmung mit den [[{{MediaWiki:Visualeditor-report-link}}|Nutzungsbedingungen]] zu.',
	'visualeditor-report-link' => 'foundation:Terms of Use/de',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'visualeditor-notification-saved' => 'Ihre Änderungen an $1 wurden gespeichert.',
	'visualeditor-viewpage-savewarning' => 'Sind Sie sicher, dass Sie zum Ansichtsmodus wechseln möchten, ohne vorher zu speichern?',
	'visualeditor-editsummary' => 'Beschreiben Sie, was Sie geändert haben.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'visualeditor-linkinspector-label-pagetitle' => 'Sernamey pela',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'WYSIWYG-editor za MediaWiki',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'visualeditor-ca-editsource' => 'Redakti fonton',
	'visualeditor-savedialog-label-create' => 'Krei paĝon',
	'visualeditor-savedialog-label-save' => 'Konservi paĝon',
	'visualeditor-savedialog-label-restore' => 'Restarigi paĝon',
	'visualeditor-linkinspector-label-pagetitle' => 'Titolo de paĝo',
	'visualeditor-linkinspector-suggest-existing-page' => 'Ekzistanta paĝo',
	'visualeditor-linkinspector-suggest-new-page' => 'Nova paĝo',
	'visualeditor-linkinspector-suggest-external-link' => 'Ekstera liglo',
	'visualeditor-formatdropdown-title' => 'Ŝanĝi formaton',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Titolo 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titolo 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titolo 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titolo 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titolo 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titolo 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'Grasa teksto', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiva teksto', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Ligilo', # Fuzzy
	'visualeditor-historybutton-undo-tooltip' => 'Malfari', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refari', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Fermi',
	'visualeditor-inspector-remove-tooltip' => 'Forigi',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Erdemaslancan
 * @author Imre
 * @author Jdforrester
 * @author Ralgis
 */
$messages['es'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Editor visual para MediaWiki',
	'visualeditor-preference-enable' => 'Activar el editor visual (sólo en los espacios de nombres [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]]) y de [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|usuario]]',
	'visualeditor-mainnamespacepagelink' => 'Project:Espacio principal',
	'visualeditor-usernamespacepagelink' => 'Project:Espacio de nombres de usuario',
	'visualeditor-notification-saved' => 'Tus cambios en $1 han sido guardados',
	'visualeditor-notification-created' => '$1 ha sido creado',
	'visualeditor-notification-restored' => '$1 ha sido restaurada.',
	'visualeditor-notification-reported' => 'Tu problema ha sido reportado. Gracias.',
	'visualeditor-ca-editsource' => 'Editar fuente',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-ca-ve-create' => 'Editor visual',
	'visualeditor-toolbar-savedialog' => 'Revisar y guardar',
	'visualeditor-savedialog-title-review' => 'Revisa tus cambios',
	'visualeditor-savedialog-title-report' => 'Informar sobre un problema',
	'visualeditor-savedialog-title-save' => 'Guardar tus cambios',
	'visualeditor-savedialog-label-review-wrong' => 'Algo está mal',
	'visualeditor-savedialog-label-review-good' => 'Me parece adecuado',
	'visualeditor-savedialog-label-report' => 'Informar sobre un problema',
	'visualeditor-savedialog-label-create' => 'Crear página',
	'visualeditor-savedialog-label-save' => 'Guardar la página',
	'visualeditor-savedialog-label-restore' => 'Restablecer página',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|aviso|avisos}}',
	'visualeditor-feedback-tool' => 'Comentar',
	'tooltip-ca-ve-edit' => 'Editar esta página con el editor visual VisualEditor',
	'visualeditor-inspector-title' => 'Inspeccionar',
	'visualeditor-linkinspector-title' => 'Hiperenlace',
	'visualeditor-linkinspector-label-pagetitle' => 'Título de la página',
	'visualeditor-linkinspector-suggest-existing-page' => 'Página existente',
	'visualeditor-linkinspector-suggest-new-page' => 'Nueva página',
	'visualeditor-linkinspector-suggest-external-link' => 'Enlace web',
	'visualeditor-formatdropdown-title' => 'Cambiar formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Párrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Encabezado 1',
	'visualeditor-formatdropdown-format-heading2' => 'Encabezado 2',
	'visualeditor-formatdropdown-format-heading3' => 'Encabezado 3',
	'visualeditor-formatdropdown-format-heading4' => 'Encabezado 4',
	'visualeditor-formatdropdown-format-heading5' => 'Encabezado 5',
	'visualeditor-formatdropdown-format-heading6' => 'Encabezado 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformateado',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negrita', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursiva', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Enlace', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar sangría', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Disminuir sangría', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerada',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista con viñetas',
	'visualeditor-clearbutton-tooltip' => 'Borrar formato',
	'visualeditor-historybutton-undo-tooltip' => 'Deshacer', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Rehacer', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Cerrar',
	'visualeditor-inspector-remove-tooltip' => 'Borrar',
	'visualeditor-viewpage-savewarning' => '¿Estás seguro que quieres volver al modo de visualización sin guardar primero?',
	'visualeditor-loadwarning' => 'Error al cargar los datos del servidor: $1. ¿Le gustaría volver a intentarlo?',
	'visualeditor-differror' => 'Error al cargar datos del servidor: $1.',
	'visualeditor-saveerror' => 'Error al guardar datos en el servidor: $1.',
	'visualeditor-editconflict' => 'No se pudieran guardar sus cambios debido a un conflicto de edición. ¿Le gustaría resolver el conflicto manualmente?',
	'visualeditor-editsummary' => 'Describe lo que has cambiado',
	'visualeditor-problem' => 'Describe lo que salió mal',
	'visualeditor-aliennode-tooltip' => 'Lo sentimos, este elemento no se puede editar mediante el editor visual',
	'tag-visualeditor' => '[[Special:Tags|Etiqueta]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Editor visual]]',
	'tag-visualeditor-description' => 'Edición realizada con el [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Estás utilizando una versión alfa del [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Editor Visual]]. Puede ser lenta y producir cambios erróneos - Comprueba cada edición que realices.',
	'visualeditor-report-notice' => 'Entiendo que haciendo clic en el botón Enviar transmito mis cambios y mis comentarios, que se almacenarán para su análisis. Estoy de acuerdo en proporcionar esta información, de conformidad con las [[{{MediaWiki:Visualeditor-report-link}}|Condiciones de uso]].',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'visualeditor' => 'Visuaaltoimetaja',
	'visualeditor-desc' => 'MediaWiki visuaaltoimetaja',
	'visualeditor-notification-saved' => 'Sinu muudatused leheküljel $1 on salvestatud.',
	'visualeditor-notification-created' => 'Loodud on lehekülg $1.',
	'visualeditor-ca-editsource' => 'Muuda allikat',
	'visualeditor-linkinspector-title' => 'Hüperlink',
	'visualeditor-linkinspector-label-pagetitle' => 'Lehekülg',
	'visualeditor-linkinspector-suggest-existing-page' => 'Olemasolev lehekülg',
	'visualeditor-linkinspector-suggest-new-page' => 'Uus lehekülg',
	'visualeditor-linkinspector-suggest-external-link' => 'Võrgulink',
	'visualeditor-formatdropdown-title' => 'Muuda vormingut',
	'visualeditor-formatdropdown-format-paragraph' => 'Lõik',
	'visualeditor-formatdropdown-format-heading1' => 'Pealkiri 1',
	'visualeditor-formatdropdown-format-heading2' => 'Pealkiri 2',
	'visualeditor-formatdropdown-format-heading3' => 'Pealkiri 3',
	'visualeditor-formatdropdown-format-heading4' => 'Pealkiri 4',
	'visualeditor-formatdropdown-format-heading5' => 'Pealkiri 5',
	'visualeditor-formatdropdown-format-heading6' => 'Pealkiri 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Eelvormindatud',
	'visualeditor-annotationbutton-bold-tooltip' => 'Rasvane kiri', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kaldkiri', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Link', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Suurenda taanet', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Vähenda taanet', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Numberloend',
	'visualeditor-listbutton-bullet-tooltip' => 'Täpploend',
	'visualeditor-clearbutton-tooltip' => 'Eemalda vorming',
	'visualeditor-historybutton-undo-tooltip' => 'Võta tagasi', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Tee uuesti', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Sulge',
	'visualeditor-inspector-remove-tooltip' => 'Eemalda',
	'visualeditor-viewpage-savewarning' => 'Kas oled kindel, et tahad mina tagasi vaatamisrežiimi ilma kõigepealt salvestamata?',
	'visualeditor-loadwarning' => 'Tõrge andmete laadimisel serverist: $1. Ehk proovid uuesti?',
	'visualeditor-saveerror' => 'Tõrge andmete salvestamisel serverisse: $1.',
	'visualeditor-editsummary' => 'Kirjelda, mida muutsid',
);

/** Persian (فارسی)
 * @author Jdforrester
 * @author Mjbmr
 */
$messages['fa'] = array(
	'visualeditor-mainnamespacepagelink' => 'Project:فضای_نام_اصلی',
	'visualeditor-notification-created' => '$1 ایجاد شد.',
	'visualeditor-notification-restored' => '$1 بازیابی شد.',
	'visualeditor-ca-editsource' => 'ویرایش مبدأ',
	'visualeditor-ca-ve-edit' => 'ویرایش‌گر بصری',
	'visualeditor-ca-ve-create' => 'ویرایش‌گر بصری',
	'visualeditor-savedialog-label-report' => 'گزارش مشکل',
	'visualeditor-savedialog-label-create' => 'ایجاد صفحه',
	'visualeditor-savedialog-label-save' => 'ذخیره صفحه',
	'visualeditor-linkinspector-title' => 'فراپیوند',
	'visualeditor-linkinspector-label-pagetitle' => 'عنوان صفحه',
	'visualeditor-linkinspector-suggest-new-page' => 'صفحهٔ جدید',
	'visualeditor-formatdropdown-format-paragraph' => 'پاراگراف',
	'visualeditor-formatdropdown-format-heading1' => 'سرعنوان ۱',
	'visualeditor-formatdropdown-format-heading2' => 'سرعنوان ۲',
	'visualeditor-formatdropdown-format-heading3' => 'سرعنوان ۳',
	'visualeditor-formatdropdown-format-heading4' => 'سرعنوان ۴',
	'visualeditor-formatdropdown-format-heading5' => 'سرعنوان ۵',
	'visualeditor-formatdropdown-format-heading6' => 'سرعنوان ۶',
	'visualeditor-annotationbutton-bold-tooltip' => 'ضخیم', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'مورب', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'پیوند', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'فهرست شماره‌دار',
	'visualeditor-listbutton-bullet-tooltip' => 'فهرست گلوله‌ای',
	'visualeditor-clearbutton-tooltip' => 'پاک‌سازی قالب‌بندی',
	'visualeditor-historybutton-undo-tooltip' => 'خنثی‌سازی', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'انجام دوباره', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'بستن',
	'visualeditor-inspector-remove-tooltip' => 'حذف',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author VezonThunder
 */
$messages['fi'] = array(
	'visualeditor' => 'Visuaalinen muokkain',
	'visualeditor-desc' => 'Visuaalinen muokkain MediaWikille',
	'visualeditor-preference-enable' => 'Käytä VisualEditor-muokkainta (vain [[Project:Päänimiavaruus|päänimiavaruudessa]])', # Fuzzy
	'visualeditor-notification-saved' => 'Muutoksesi sivuun $1 on tallennettu.',
	'visualeditor-notification-created' => '$1 on luotu.',
	'visualeditor-notification-restored' => '$1 on palautettu.',
	'visualeditor-notification-reported' => 'Ongelmasi on raportoitu. Kiitos.',
	'visualeditor-ca-editsource' => 'Muokkaa lähdetekstiä',
	'visualeditor-ca-ve-edit' => 'Visuaalinen muokkain',
	'visualeditor-ca-ve-create' => 'Visuaalinen muokkain',
	'visualeditor-toolbar-savedialog' => 'Tarkista ja tallenna',
	'visualeditor-savedialog-title-review' => 'Tarkista muutoksesi',
	'visualeditor-savedialog-title-report' => 'Ilmoita ongelmasta',
	'visualeditor-savedialog-title-save' => 'Tallenna muutokset',
	'visualeditor-savedialog-label-review-wrong' => 'Jokin on vialla',
	'visualeditor-savedialog-label-review-good' => 'Hyvältä näyttää',
	'visualeditor-savedialog-label-report' => 'Ilmoita ongelmasta',
	'visualeditor-savedialog-label-create' => 'Luo sivu',
	'visualeditor-savedialog-label-save' => 'Tallenna sivu',
	'visualeditor-savedialog-label-restore' => 'Palauta sivu',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|ilmoitus|ilmoitusta}}',
	'visualeditor-feedback-tool' => 'Jätä palautetta',
	'tooltip-ca-ve-edit' => 'Muokkaa tätä sivua VisualEditor-muokkaimella',
	'visualeditor-linkinspector-title' => 'Hyperlinkki',
	'visualeditor-linkinspector-label-pagetitle' => 'Sivun otsikko',
	'visualeditor-linkinspector-suggest-existing-page' => 'Olemassaoleva sivu',
	'visualeditor-linkinspector-suggest-new-page' => 'Uusi sivu',
	'visualeditor-linkinspector-suggest-external-link' => 'Internet-linkki',
	'visualeditor-formatdropdown-title' => 'Muuta muoto',
	'visualeditor-formatdropdown-format-paragraph' => 'Kappale',
	'visualeditor-formatdropdown-format-heading1' => 'Otsikko 1',
	'visualeditor-formatdropdown-format-heading2' => 'Otsikko 2',
	'visualeditor-formatdropdown-format-heading3' => 'Otsikko 3',
	'visualeditor-formatdropdown-format-heading4' => 'Otsikko 4',
	'visualeditor-formatdropdown-format-heading5' => 'Otsikko 5',
	'visualeditor-formatdropdown-format-heading6' => 'Otsikko 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Esimuotoiltu',
	'visualeditor-annotationbutton-bold-tooltip' => 'Lihavointi $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + B)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiivi $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + I)',
	'visualeditor-annotationbutton-link-tooltip' => 'Linkki $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + K)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Lisää sisennystä $1',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Vähennä sisennystä $1',
	'visualeditor-listbutton-number-tooltip' => 'Numeroitu luettelo',
	'visualeditor-listbutton-bullet-tooltip' => 'Luettelo',
	'visualeditor-clearbutton-tooltip' => 'Poista muotoilu',
	'visualeditor-historybutton-undo-tooltip' => 'Kumoa $1',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + Z)',
	'visualeditor-historybutton-redo-tooltip' => 'Tee uudelleen $1',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Shift + Z)',
	'visualeditor-inspector-close-tooltip' => 'Sulje',
	'visualeditor-inspector-remove-tooltip' => 'Poista',
	'visualeditor-viewpage-savewarning' => 'Oletko varma, että haluat palata katselutilaan tallentamatta ensin?',
	'visualeditor-loadwarning' => 'Virhe ladattaessa tietoja palvelimelta: $1. Haluatko yrittää uudelleen?',
	'visualeditor-differror' => 'Virhe ladattaessa tietoja palvelimelta: $1.',
	'visualeditor-saveerror' => 'Virhe tallennettaessa tietoja palvelimelle: $1.',
	'visualeditor-editconflict' => 'Muutoksiasi ei voitu tallentaa samanaikaisen muokkauksen takia. Haluatko ratkaista päällekkäiset muutokset manuaalisesti?',
	'visualeditor-editsummary' => 'Kuvaile, mitä olet muuttanut',
	'visualeditor-problem' => 'Kuvaile, mikä meni vikaan',
	'visualeditor-aliennode-tooltip' => 'Valitettavasti tätä kohdetta ei voi muokata visuaalisella muokkaimella',
	'tag-visualeditor' => '[[Special:Tags|Merkintä]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Muutos tehtiin [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]-muokkaimella',
	'visualeditor-descriptionpagelink' => 'Project:Visuaalinen muokkain',
	'visualeditor-alphawarning' => 'Käytät [[{{MediaWiki:Visualeditor-descriptionpagelink}}|visuaalisen muokkaimen]] alpha-versiota. Se saattaa olla hidas ja tehdä virheellisiä muutoksia – tarkista jokainen muokkaus, jonka teet.',
	'visualeditor-report-notice' => 'Ymmärrän, että painamalla "Tallenna" lähetän muutokseni ja palautteeni, jotka säilötään analysointia varten. Suostun antamaan palautetta [[{{MediaWiki:Visualeditor-report-link}}|Käyttöehtojen]] mukaisesti.',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Hello71
 * @author Nicolas NALLET
 * @author Npettiaux
 * @author Urhixidur
 * @author Wyz
 */
$messages['fr'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Éditeur visuel pour MediaWiki',
	'visualeditor-preference-enable' => 'Activer VisualEditor (seulement dans les espaces de noms [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]] et [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|utilisateur]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Main namespace',
	'visualeditor-usernamespacepagelink' => 'Project:Espace de nom utilisateur',
	'visualeditor-notification-saved' => 'Vos modifications à $1 ont été enregistrés.',
	'visualeditor-notification-created' => '$1 a été créé!',
	'visualeditor-notification-restored' => '$1 a été récupéré.',
	'visualeditor-notification-reported' => 'Votre problème a été signalé. Merci.',
	'visualeditor-ca-editsource' => 'Modifier la source',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Relire et enregistrer',
	'visualeditor-savedialog-title-review' => 'Relire vos modifications',
	'visualeditor-savedialog-title-report' => 'Signaler un problème',
	'visualeditor-savedialog-title-save' => 'Enregistrer vos modifications',
	'visualeditor-savedialog-label-review-wrong' => 'Quelque chose ne va pas',
	'visualeditor-savedialog-label-review-good' => 'Me paraît correct',
	'visualeditor-savedialog-label-report' => 'Signaler un problème',
	'visualeditor-savedialog-label-create' => 'Créer la page',
	'visualeditor-savedialog-label-save' => 'Enregistrer la page',
	'visualeditor-savedialog-label-restore' => 'Restaurer la page',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|avertissement|avertissements}}',
	'visualeditor-feedback-tool' => 'Laisser un avis',
	'tooltip-ca-ve-edit' => 'Modifier cette page avec VisualEditor',
	'visualeditor-inspector-title' => 'Inspecter',
	'visualeditor-linkinspector-title' => 'Hyperlien',
	'visualeditor-linkinspector-label-pagetitle' => 'Titre de la page',
	'visualeditor-linkinspector-suggest-existing-page' => 'Page existante',
	'visualeditor-linkinspector-suggest-new-page' => 'Nouvelle page',
	'visualeditor-linkinspector-suggest-external-link' => 'Lien Web',
	'visualeditor-formatdropdown-title' => 'Modifier le format',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraphe',
	'visualeditor-formatdropdown-format-heading1' => 'Titre 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titre 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titre 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titre 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titre 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titre 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Préformaté',
	'visualeditor-annotationbutton-bold-tooltip' => 'Gras $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Commande + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + b)',
	'visualeditor-annotationbutton-italic-tooltip' => '$1 en italique',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Commande + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Lien $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Commande + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Augmenter l’indentation $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Onglet)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuer l’indentation $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Maj + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Liste numérotée',
	'visualeditor-listbutton-bullet-tooltip' => 'Liste à puces',
	'visualeditor-clearbutton-tooltip' => 'Effacer la mise en forme',
	'visualeditor-historybutton-undo-tooltip' => 'Annuler $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Commande + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Refaire $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Commande + Maj + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Maj + z)',
	'visualeditor-inspector-close-tooltip' => 'Fermer',
	'visualeditor-inspector-remove-tooltip' => 'Supprimer',
	'visualeditor-viewpage-savewarning' => 'Êtes-vous sûr de vouloir retourner au mode lecture sans d’abord enregistrer ?',
	'visualeditor-loadwarning' => 'Erreur lors du chargement des données du serveur: $1. Voulez-vous réessayer?',
	'visualeditor-differror' => 'Erreur au chargement des données depuis le serveur: $1.',
	'visualeditor-saveerror' => 'Erreur d’enregistrement des données sur le serveur : $1.',
	'visualeditor-editconflict' => "Vos modifications n'ont pas pu être enregistrés à cause d'un conflit d'édition. Voulez-vous résoudre ce conflit manuellement?",
	'visualeditor-editsummary' => 'Décrire ce que vous avez modifié',
	'visualeditor-problem' => 'Décrire ce qui ne va pas',
	'visualeditor-aliennode-tooltip' => 'Désolé, cet élément ne peut pas être modifié en utilisant VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Balise]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Modification faite en utilisant [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Vous utilisez une version alpha de [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Elle peut être lente et faire des modifications erronées — veuillez vérifier chaque modification que vous faites.',
	'visualeditor-report-notice' => "Je comprends qu'en cliquant sur Soumettre, je transmettrai mes changements et mon avis, qui seront stockés pour analyse. J'accepte de fournir un avis en accord avec les [[{{MediaWiki:Visualeditor-report-link}}|Conditions d'utilisation]].",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'visualeditor' => 'Èditor visuâl',
	'visualeditor-desc' => 'Èditor visuâl por MediaWiki',
	'visualeditor-mainnamespacepagelink' => 'Project:Èspâço de noms principâl',
	'visualeditor-usernamespacepagelink' => 'Project:Èspâço de noms utilisator',
	'visualeditor-notification-saved' => 'Voutros changements a $1 sont étâs encartâs.',
	'visualeditor-notification-created' => '$1 est étâye fêta.',
	'visualeditor-notification-restored' => '$1 est étâye refêta.',
	'visualeditor-notification-reported' => 'Voutron problèmo est étâ signalâ. Grant-marci.',
	'visualeditor-ca-editsource' => 'Changiér la sôrsa',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Revêre et pués encartar',
	'visualeditor-savedialog-title-review' => 'Revêre voutros changements',
	'visualeditor-savedialog-title-report' => 'Signalar un problèmo',
	'visualeditor-savedialog-title-save' => 'Encartar voutros changements',
	'visualeditor-savedialog-label-review-wrong' => 'Quârque-ren vat pas',
	'visualeditor-savedialog-label-review-good' => 'Mè parêt justo',
	'visualeditor-savedialog-label-report' => 'Signalar un problèmo',
	'visualeditor-savedialog-label-create' => 'Fâre la pâge',
	'visualeditor-savedialog-label-save' => 'Encartar la pâge',
	'visualeditor-savedialog-label-restore' => 'Refâre la pâge',
	'visualeditor-editnotices-tool' => '$1 avèrtissement{{PLURAL:$1||s}}',
	'visualeditor-feedback-tool' => 'Balyér voutron avis',
	'tooltip-ca-ve-edit' => 'Changiér ceta pâge avouéc VisualEditor',
	'visualeditor-linkinspector-title' => 'Lim hipèrtèxto',
	'visualeditor-linkinspector-label-pagetitle' => 'Titro de la pâge',
	'visualeditor-linkinspector-suggest-existing-page' => 'Pâge ègzistenta',
	'visualeditor-linkinspector-suggest-new-page' => 'Pâge novèla',
	'visualeditor-linkinspector-suggest-external-link' => 'Lim vouèbe',
	'visualeditor-formatdropdown-title' => 'Changiér lo format',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Titro 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titro 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titro 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titro 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titro 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titro 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Prèformatâ',
	'visualeditor-annotationbutton-bold-tooltip' => 'Grâs', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Étalico', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Lim', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerotâye',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista de puges',
	'visualeditor-historybutton-undo-tooltip' => 'Dèfâre', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refâre', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Cllôre',
	'visualeditor-inspector-remove-tooltip' => 'Enlevar',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'visualeditor' => 'Editor visual',
	'visualeditor-desc' => 'Editor visual para MediaWiki',
	'visualeditor-preference-enable' => 'Activar o editor visual (só nos espazos de nomes [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]] e de [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|usuario]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Espazo de nomes principal',
	'visualeditor-usernamespacepagelink' => 'Project:Espazo de nomes de usuario',
	'visualeditor-notification-saved' => 'Gardáronse os cambios feitos en "$1".',
	'visualeditor-notification-created' => 'Creouse "$1".',
	'visualeditor-notification-restored' => 'Restaurouse "$1".',
	'visualeditor-notification-reported' => 'Informouse do problema. Grazas.',
	'visualeditor-ca-editsource' => 'Editar a fonte',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-ca-ve-create' => 'Editor visual',
	'visualeditor-toolbar-savedialog' => 'Revisar e gardar',
	'visualeditor-savedialog-title-review' => 'Revisar os seus cambios',
	'visualeditor-savedialog-title-report' => 'Informar sobre un problema',
	'visualeditor-savedialog-title-save' => 'Gardar os seus cambios',
	'visualeditor-savedialog-label-review-wrong' => 'Algo vai mal',
	'visualeditor-savedialog-label-review-good' => 'Semella ben para min',
	'visualeditor-savedialog-label-report' => 'Informar sobre un problema',
	'visualeditor-savedialog-label-create' => 'Crear a páxina',
	'visualeditor-savedialog-label-save' => 'Gardar a páxina',
	'visualeditor-savedialog-label-restore' => 'Restaurar a páxina',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|aviso|avisos}}',
	'visualeditor-feedback-tool' => 'Deixe un comentario',
	'tooltip-ca-ve-edit' => 'Editar esta páxina co editor visual',
	'visualeditor-inspector-title' => 'Inspeccionar',
	'visualeditor-linkinspector-title' => 'Hiperligazón',
	'visualeditor-linkinspector-label-pagetitle' => 'Título da páxina',
	'visualeditor-linkinspector-suggest-existing-page' => 'Páxina existente',
	'visualeditor-linkinspector-suggest-new-page' => 'Páxina nova',
	'visualeditor-linkinspector-suggest-external-link' => 'Ligazón web',
	'visualeditor-formatdropdown-title' => 'Cambiar o formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Parágrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Cabeceira 1',
	'visualeditor-formatdropdown-format-heading2' => 'Cabeceira 2',
	'visualeditor-formatdropdown-format-heading3' => 'Cabeceira 3',
	'visualeditor-formatdropdown-format-heading4' => 'Cabeceira 4',
	'visualeditor-formatdropdown-format-heading5' => 'Cabeceira 5',
	'visualeditor-formatdropdown-format-heading6' => 'Cabeceira 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Con formato previo',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negra $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Comando + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursiva $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Comando + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Ligazón $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Comando + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar a sangría $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuír a sangría $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Maiús + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Lista numerada',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista con asteriscos',
	'visualeditor-clearbutton-tooltip' => 'Borrar o formato',
	'visualeditor-historybutton-undo-tooltip' => 'Desfacer $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Comando + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Refacer $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Comando + Maiús + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Maiús + z)',
	'visualeditor-inspector-close-tooltip' => 'Pechar',
	'visualeditor-inspector-remove-tooltip' => 'Eliminar',
	'visualeditor-viewpage-savewarning' => 'Está seguro de querer volver ao modo de lectura sen gardar primeiro?',
	'visualeditor-loadwarning' => 'Erro ao cargar os datos desde o servidor: $1. Quéreo intentar de novo?',
	'visualeditor-differror' => 'Erro ao cargar os datos desde o servidor: $1.',
	'visualeditor-saveerror' => 'Erro ao gardar os datos no servidor: $1.',
	'visualeditor-editconflict' => 'Non se puideron gardar os cambios debido a un conflito de edición. Quere resolver o conflito manualmente?',
	'visualeditor-editsummary' => 'Describa os seus cambios',
	'visualeditor-problem' => 'Describa o que foi mal',
	'visualeditor-aliennode-tooltip' => 'Sentímolo, o editor visual non pode editar este elemento.',
	'tag-visualeditor' => '[[Special:Tags|Etiqueta]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Editor visual]]',
	'tag-visualeditor-description' => 'Edición feita mediante o [[{{MediaWiki:Visualeditor-descriptionpagelink}}|editor visual]]',
	'visualeditor-descriptionpagelink' => 'Project:Editor visual',
	'visualeditor-alphawarning' => 'Está utilizando a versión alpha do [[{{MediaWiki:Visualeditor-descriptionpagelink}}|editor visual]]. Pode ser lenta e facer modificacións erróneas. Comprobe todas as edicións que faga.',
	'visualeditor-report-notice' => 'Entendo que ao premer no botón "Enviar" hei transmitir as miñas modificacións e os meus comentarios, que quedarán rexistrados para a súa análise. Acepto achegar os comentarios de acordo cos [[{{MediaWiki:Visualeditor-report-link}}|termos de uso]].',
	'visualeditor-report-link' => 'foundation:Terms of Use/gl',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'visualeditor' => 'עורך חזותי',
	'visualeditor-desc' => 'עורך חזותי למדיה־ויקי',
	'visualeditor-preference-enable' => 'להפעיל את העורך החזותי (רק ב[[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|מרחב השמות הראשי]] וב[[{{MediaWiki:Visualeditor-usernamespacepagelink}}|מרחב המשתשב]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Main namespace',
	'visualeditor-usernamespacepagelink' => 'Project:User namespace',
	'visualeditor-notification-saved' => 'השינויים שלך לדף $1 לא נשמרו.',
	'visualeditor-notification-created' => 'הדף $1 נוצר.',
	'visualeditor-notification-restored' => 'הדף $1 שוחזר.',
	'visualeditor-notification-reported' => 'הבעיה שלך דווחה. תודה.',
	'visualeditor-ca-editsource' => 'עריכת קוד מקור',
	'visualeditor-ca-ve-edit' => 'עורך חזותי',
	'visualeditor-ca-ve-create' => 'עורך חזותי',
	'visualeditor-toolbar-savedialog' => 'סקירה ושמירה',
	'visualeditor-savedialog-title-review' => 'סקירת השינויים שלך',
	'visualeditor-savedialog-title-report' => 'דיווח על בעיה',
	'visualeditor-savedialog-title-save' => 'שמירת השינויים שלך',
	'visualeditor-savedialog-label-review-wrong' => 'משהו לא בסדר',
	'visualeditor-savedialog-label-review-good' => 'נראה בסדר',
	'visualeditor-savedialog-label-report' => 'דיווח על בעיה',
	'visualeditor-savedialog-label-create' => 'יצירת דף',
	'visualeditor-savedialog-label-save' => 'שמירת דף',
	'visualeditor-savedialog-label-restore' => 'שחזור דף',
	'visualeditor-editnotices-tool' => '{{PLURAL:$1|הודעה אחת|$1 הודעות}}',
	'visualeditor-feedback-tool' => 'שליחת משוב',
	'tooltip-ca-ve-edit' => 'עריכה באמצעות עורך חזותי',
	'visualeditor-inspector-title' => 'חקירה',
	'visualeditor-linkinspector-title' => 'היפר־קישור',
	'visualeditor-linkinspector-label-pagetitle' => 'כותרת דף',
	'visualeditor-linkinspector-suggest-existing-page' => 'דף קיים',
	'visualeditor-linkinspector-suggest-new-page' => 'דף חדש',
	'visualeditor-linkinspector-suggest-external-link' => 'קישור לרשת',
	'visualeditor-formatdropdown-title' => 'שינוי סגנון',
	'visualeditor-formatdropdown-format-paragraph' => 'פסקה',
	'visualeditor-formatdropdown-format-heading1' => 'כותרת רמה 1',
	'visualeditor-formatdropdown-format-heading2' => 'כותרת רמה 2',
	'visualeditor-formatdropdown-format-heading3' => 'כותרת רמה 3',
	'visualeditor-formatdropdown-format-heading4' => 'כותרת רמה 4',
	'visualeditor-formatdropdown-format-heading5' => 'כותרת רמה 5',
	'visualeditor-formatdropdown-format-heading6' => 'כותרת רמה 6',
	'visualeditor-formatdropdown-format-preformatted' => 'טקסט חלק',
	'visualeditor-annotationbutton-bold-tooltip' => 'בולט $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Command + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Control + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'נטוי $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Command + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Control + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'קישור $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Command + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Control + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'הגדלת הזחה $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(טאב)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'הקטנת הזחה $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'רשימה ממוספרת',
	'visualeditor-listbutton-bullet-tooltip' => 'רשימת תבליטים',
	'visualeditor-clearbutton-tooltip' => 'ניקוי עיצוב',
	'visualeditor-historybutton-undo-tooltip' => 'ביטול $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Command + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Control + z)',
	'visualeditor-historybutton-redo-tooltip' => 'חזרה על פעולה $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Command + Shift + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Control + Shift + z)',
	'visualeditor-inspector-close-tooltip' => 'סגירה',
	'visualeditor-inspector-remove-tooltip' => 'הסרה',
	'visualeditor-viewpage-savewarning' => 'האם ברצונך לשוב למצב תצוגה ללא שמירה?',
	'visualeditor-loadwarning' => 'שגיאה בטעינת מידע מהשרת: $1. האם לנסות שוב?',
	'visualeditor-differror' => 'שגיאה בטעינת נתונים מהשרת: $1',
	'visualeditor-saveerror' => 'שגיאה בשמירת נתונים לשרת: $1.',
	'visualeditor-editconflict' => 'השינויים שלך לא נשמרו בגלל התנגשות עריכה. האם ברצונך לפתור את ההתנגשות ידנית?',
	'visualeditor-editsummary' => 'נא לתאר מה שינית',
	'visualeditor-problem' => 'נא לתאר מה השתבש',
	'visualeditor-aliennode-tooltip' => 'סליחה, אי־אפשר לערוך את המרכיב הזה באמצעות העורך החזותי',
	'tag-visualeditor' => '[[Special:Tags|תג]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|עורך חזותי]]',
	'tag-visualeditor-description' => 'העריכה נעשתה באמצעות [[{{MediaWiki:Visualeditor-descriptionpagelink}}|העורך החזותי]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'זוהי גרסת אלפא של [[{{MediaWiki:Visualeditor-descriptionpagelink}}|העורך החזותי]]. היא עלולה להיות אטית ולעשות שינויים שגויים – נא לבדוק כל עריכה שנעשית באמצעותה.',
	'visualeditor-report-notice' => 'ברור לי שלחיצה על "שליחה" פירושה שליחת את השינויים שלי ואת המשוב שלי, שיישמר לצורך ניתוח והסכמה לספק משוב בהתאם ל[[{{MediaWiki:Visualeditor-report-link}}|תנאי השימוש]].',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Rajesh
 */
$messages['hi'] = array(
	'visualeditor-desc' => 'मीडियाविकि के लिए विजुअल एडीटर',
	'visualeditor-mainnamespacepagelink' => 'Project:मुख्य नेमस्पेस',
	'visualeditor-usernamespacepagelink' => 'Project: उपयोक्ता नेमस्पेस',
	'visualeditor-notification-saved' => '$1 आपके बदलाव को सहेजा गया था.',
	'visualeditor-ca-editsource' => 'स्रोत संपादित करें',
	'visualeditor-savedialog-title-review' => 'अपने बदलाव की समीक्षा करें',
	'visualeditor-savedialog-title-report' => 'कोई समस्या रिपोर्ट करें',
	'visualeditor-savedialog-title-save' => 'अपने बदलाव सँजोएँ',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'WYSIWYG-editor za MediaWiki',
	'visualeditor-preference-enable' => 'VisualEditor zmóžnić (jenož we [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|hłownym mjenowym rumje]] a [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|wužiwarskim mjenowym rumje]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Hłowny mjenowy rum',
	'visualeditor-usernamespacepagelink' => 'Project:Wužiwarski mjenowy rum',
	'visualeditor-notification-saved' => 'Twoje změny na $1 su so składowali.',
	'visualeditor-notification-created' => '$1 je so wutworił.',
	'visualeditor-notification-restored' => '$1 je so wobnowił.',
	'visualeditor-notification-reported' => 'Twój problem je so zdźělił. Wulki dźak.',
	'visualeditor-ca-editsource' => 'Žórłowy tekst wobdźěłać',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Přepruwować a składować',
	'visualeditor-savedialog-title-review' => 'Twoje změny přepruwować',
	'visualeditor-savedialog-title-report' => 'Problem zdźělić',
	'visualeditor-savedialog-title-save' => 'Twoje změny składować',
	'visualeditor-savedialog-label-review-wrong' => 'Něšto je so nimokuliło',
	'visualeditor-savedialog-label-review-good' => 'Wupada derje',
	'visualeditor-savedialog-label-report' => 'Problem zdźělić',
	'visualeditor-savedialog-label-create' => 'Stronu wutworić',
	'visualeditor-savedialog-label-save' => 'Stronu składować',
	'visualeditor-savedialog-label-restore' => 'Stronu wobnowić',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|notica|noticy|noticy|noticow}}',
	'visualeditor-feedback-tool' => 'Komentar zawostajić',
	'tooltip-ca-ve-edit' => 'Tutu stronu z VisualEditor wobdźěłać',
	'visualeditor-inspector-title' => 'Přepruwować',
	'visualeditor-linkinspector-title' => 'Wotkaz',
	'visualeditor-linkinspector-label-pagetitle' => 'Titul strony',
	'visualeditor-linkinspector-suggest-existing-page' => 'Eksistowaca strona',
	'visualeditor-linkinspector-suggest-new-page' => 'Nowa strona',
	'visualeditor-linkinspector-suggest-external-link' => 'Webwotkaz',
	'visualeditor-formatdropdown-title' => 'Format změnić',
	'visualeditor-formatdropdown-format-paragraph' => 'Wotstawk',
	'visualeditor-formatdropdown-format-heading1' => 'Nadpis 1',
	'visualeditor-formatdropdown-format-heading2' => 'Nadpis 2',
	'visualeditor-formatdropdown-format-heading3' => 'Nadpis 3',
	'visualeditor-formatdropdown-format-heading4' => 'Nadpis 4',
	'visualeditor-formatdropdown-format-heading5' => 'Nadpis 5',
	'visualeditor-formatdropdown-format-heading6' => 'Nadpis 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Předformatowany',
	'visualeditor-annotationbutton-bold-tooltip' => 'Tučny', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiwny', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Wotkaz', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Zasunjenje powjetšić', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Zasunjenje pomjeńšić', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Čisłowana lisćina',
	'visualeditor-listbutton-bullet-tooltip' => 'Nalicenje',
	'visualeditor-clearbutton-tooltip' => 'Formatowanje wotstronić',
	'visualeditor-historybutton-undo-tooltip' => 'Cofnyć', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Wospjetować', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Začinić',
	'visualeditor-inspector-remove-tooltip' => 'Wotstronić',
	'visualeditor-viewpage-savewarning' => 'Chceš so woprawdźe k napohladowemu modusej wróćić, bjeztoho zo by prjedy składował?',
	'visualeditor-loadwarning' => 'Zmylk při začitowanju datow ze serwera: $1. Chceš znowa spytać?',
	'visualeditor-differror' => 'Zmylk při zacytowanju datow ze serwera: $1.',
	'visualeditor-saveerror' => 'Zmylk při składowanju datow na serwerje: $1.',
	'visualeditor-editconflict' => 'Twoje změny njedadźa so wobdźěłowanskeho konflikta dla składować. Chceš konflikt manuelnje wotstronić?',
	'visualeditor-editsummary' => 'Wopisaj, štož sy změnił',
	'visualeditor-problem' => 'Wopisaj, štož je so nimokuliło',
	'visualeditor-aliennode-tooltip' => 'Bohužel tutón element njeda so z pomocu VisualEditora wobdźěłać',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Z pomocu [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditora]] wobdźěłany',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Wužiwaš alfa-wersiju [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditora]]. Móže pomału być a zmylne změny přewjesć - prošu přepruwuj kóždu změnu, kotruž přewjedźeš.',
	'visualeditor-report-notice' => 'Rozumju, zo swoje změny a swój komentar, kotrež budu so za analyzu składować,  sposrědkuju, hdyž na Wótpósłać kliknu. Sym přezjedny, komentary wotpowědujo [[{{MediaWiki:Visualeditor-report-link}}|wužiwanskim wuměnjenjam]] wotedać.',
	'visualeditor-report-link' => 'foundation:Terms of Use/de',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Vizuális szerkesztő a MediaWikihez',
	'visualeditor-formatdropdown-format-heading1' => 'Címsor 1',
	'visualeditor-formatdropdown-format-heading2' => 'Címsor 2',
	'visualeditor-formatdropdown-format-heading3' => 'Címsor 3',
	'visualeditor-formatdropdown-format-heading4' => 'Címsor 4',
	'visualeditor-formatdropdown-format-heading5' => 'Címsor 5',
	'visualeditor-formatdropdown-format-heading6' => 'Címsor 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Előre formázott',
	'visualeditor-annotationbutton-bold-tooltip' => 'Félkövér', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Dőlt', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Hivatkozás', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Behúzás növelése', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Behúzás csökkentése', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Számozott lista',
	'visualeditor-clearbutton-tooltip' => 'Formázás törlése',
	'visualeditor-historybutton-undo-tooltip' => 'Visszavonás', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Újra', # Fuzzy
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'visualeditor' => 'Editor visual',
	'visualeditor-desc' => 'Editor visual pro MediaWiki',
	'visualeditor-ca-editsource' => 'Modificar fonte',
	'visualeditor-linkinspector-title' => 'Modificar ligamine', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Titulo del pagina',
	'visualeditor-formatdropdown-title' => 'Cambiar formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragrapho',
	'visualeditor-formatdropdown-format-heading1' => 'Titulo 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titulo 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titulo 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titulo 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titulo 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titulo 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformatate',
	'visualeditor-annotationbutton-bold-tooltip' => 'Grasse', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Italic', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Ligamine', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Augmentar indentation', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Reducer indentation', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerate',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista a punctos',
	'visualeditor-clearbutton-tooltip' => 'Rader formatation',
	'visualeditor-historybutton-undo-tooltip' => 'Disfacer', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refacer', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Es tu secur de voler retornar al modo de lectura sin salveguardar primo?',
	'visualeditor-loadwarning' => 'Error durante le cargamento del datos ab le servitor: $1. Vole tu reprobar?',
	'visualeditor-saveerror' => 'Error durante le salveguarda del datos in le servitor: $1.',
);

/** Icelandic (íslenska)
 * @author Snævar
 */
$messages['is'] = array(
	'visualeditor-notification-saved' => 'Breytingarnar þínar á $1 hafa verið vistaðar.',
	'visualeditor-notification-created' => '$1 hefur verið búin til.',
	'visualeditor-ca-editsource' => 'Breyta uppruna',
	'visualeditor-linkinspector-title' => 'Breyta tengli', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Titill síðu',
	'visualeditor-linkinspector-suggest-new-page' => 'Ný síða',
	'visualeditor-linkinspector-suggest-external-link' => 'Veftengill',
	'visualeditor-formatdropdown-title' => 'Breyta fyrirsögn',
	'visualeditor-formatdropdown-format-paragraph' => 'Fyrirsögn',
	'visualeditor-formatdropdown-format-heading1' => 'Fyrirsögn 1',
	'visualeditor-formatdropdown-format-heading2' => 'Fyrirsögn 2',
	'visualeditor-formatdropdown-format-heading3' => 'Fyrirsögn 3',
	'visualeditor-formatdropdown-format-heading4' => 'Fyrirsögn 4',
	'visualeditor-formatdropdown-format-heading5' => 'Fyrirsögn 5',
	'visualeditor-formatdropdown-format-heading6' => 'Fyrirsögn 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'Feitletra', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Skáletra', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Tengill', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Auka inndrátt', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Minnka inndrátt', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Tölusettur listi',
	'visualeditor-listbutton-bullet-tooltip' => 'Punktalisti',
	'visualeditor-clearbutton-tooltip' => 'Fjarlægja stílsnið',
	'visualeditor-historybutton-undo-tooltip' => 'Taka aftur', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Endurgera', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Ertu viss um að þú viljir fara í skoðunarham án þess að vista fyrst ?',
	'visualeditor-editsummary' => 'Lýstu því hvað þú hefur breytt',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author Doc.mari
 * @author Eleonora negri
 * @author F. Cosoleto
 * @author Gianfranco
 * @author Raoli
 */
$messages['it'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Editor visivo per MediaWiki',
	'visualeditor-preference-enable' => 'Abilita VisualEditor (solo nei namespace [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principale]] e [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|Utente]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Namespace principale',
	'visualeditor-usernamespacepagelink' => 'Project:Namespace utente',
	'visualeditor-notification-saved' => 'Le modifiche apportate a $1 sono state salvate.',
	'visualeditor-notification-created' => 'La pagina $1 è stata creata.',
	'visualeditor-notification-restored' => '$1 è stata ripristinata.',
	'visualeditor-notification-reported' => 'Il tuo problema è stato segnalato. Grazie.',
	'visualeditor-ca-editsource' => 'Modifica sorgente',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Rivedi e salva',
	'visualeditor-savedialog-title-review' => 'Rivedi le modifiche',
	'visualeditor-savedialog-title-report' => 'Segnala un problema',
	'visualeditor-savedialog-title-save' => 'Salva le modifiche',
	'visualeditor-savedialog-label-review-wrong' => 'Qualcosa è sbagliato',
	'visualeditor-savedialog-label-review-good' => 'Mi pare corretto',
	'visualeditor-savedialog-label-report' => 'Segnala un problema',
	'visualeditor-savedialog-label-create' => 'Crea pagina',
	'visualeditor-savedialog-label-save' => 'Salva la pagina',
	'visualeditor-savedialog-label-restore' => 'Ripristina pagina',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|notifica|notifiche}}',
	'visualeditor-feedback-tool' => 'Lascia un commento',
	'tooltip-ca-ve-edit' => 'Modifica questa pagina con VisualEditor',
	'visualeditor-inspector-title' => 'Ispeziona',
	'visualeditor-linkinspector-title' => 'Collegamento ipertestuale',
	'visualeditor-linkinspector-label-pagetitle' => 'Titolo della pagina',
	'visualeditor-linkinspector-suggest-existing-page' => 'Pagina esistente',
	'visualeditor-linkinspector-suggest-new-page' => 'Nuova pagina',
	'visualeditor-linkinspector-suggest-external-link' => 'Collegamento web',
	'visualeditor-formatdropdown-title' => 'Cambia formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Titolo 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titolo 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titolo 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titolo 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titolo 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titolo 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformattato',
	'visualeditor-annotationbutton-bold-tooltip' => 'Grassetto $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Command + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(CTRL + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Corsivo $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Command + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(CTRL + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Collegamento $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Command + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(CTRL + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumenta indentazione $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(TAB)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Riduci indentazione $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Maiusc + TAB)',
	'visualeditor-listbutton-number-tooltip' => 'Elenco numerato',
	'visualeditor-listbutton-bullet-tooltip' => 'Elenco puntato',
	'visualeditor-clearbutton-tooltip' => 'Pulisci formattazione',
	'visualeditor-historybutton-undo-tooltip' => 'Annulla $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Command + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(CTRL + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Rifai $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Command + Maiusc + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(CTRL + Maiusc + z)',
	'visualeditor-inspector-close-tooltip' => 'Chiudi',
	'visualeditor-inspector-remove-tooltip' => 'Rimuovi',
	'visualeditor-viewpage-savewarning' => 'Tornare alla modalità in visualizzazione senza salvare prima?',
	'visualeditor-loadwarning' => 'Errore durante il caricamento dei dati dal server: $1. Riprovare?',
	'visualeditor-differror' => 'Errore durante il caricamento dei dati dal server: $1.',
	'visualeditor-saveerror' => 'Errore durante il salvataggio dei dati sul server: $1.',
	'visualeditor-editconflict' => 'Le modifiche apportate non possono essere salvate a causa di un conflitto di edizione. Vuoi risolvere il conflitto manualmente?',
	'visualeditor-editsummary' => 'Descrivere che cosa è cambiato',
	'visualeditor-problem' => 'Descrivi cosa è andato storto',
	'visualeditor-aliennode-tooltip' => 'Spiacenti, questo elemento non può essere modificato utilizzando VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Etichetta]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Modifica eseguita usando [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Stai utilizzando una versione alfa di [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Può essere lenta e fare modifiche sbagliate - controlla ogni modifica che fai.',
	'visualeditor-report-notice' => "Capisco che cliccando su invia trasmetto le mie modifiche e il mio feedback che verranno conservati per l'analisi. Sono d'accordo a fornire i feedback in conformità alle [[{{MediaWiki:Visualeditor-report-link}}|Condizioni di Utilizzo]].",
	'visualeditor-report-link' => 'foundation:Terms of Use/it',
);

/** Japanese (日本語)
 * @author Penn Station
 * @author Shirayuki
 */
$messages['ja'] = array(
	'visualeditor' => 'ビジュアルエディター',
	'visualeditor-desc' => 'MediaWiki 用のビジュアルエディター',
	'visualeditor-preference-enable' => 'ビジュアルエディターを有効にする ([[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|標準名前空間]]および[[{{MediaWiki:Visualeditor-usernamespacepagelink}}|利用者名前空間]]のみ)',
	'visualeditor-mainnamespacepagelink' => 'Project:標準名前空間',
	'visualeditor-usernamespacepagelink' => 'Project:利用者名前空間',
	'visualeditor-notification-saved' => '$1への変更を保存しました。',
	'visualeditor-notification-created' => '$1を作成しました。',
	'visualeditor-notification-restored' => '$1を復元しました。',
	'visualeditor-notification-reported' => '問題点を報告しました。ありがとうございます。',
	'visualeditor-ca-editsource' => 'ソースを編集',
	'visualeditor-ca-ve-edit' => 'ビジュアルエディター',
	'visualeditor-ca-ve-create' => 'ビジュアルエディター',
	'visualeditor-toolbar-savedialog' => '査読して保存',
	'visualeditor-savedialog-title-review' => '変更内容の査読',
	'visualeditor-savedialog-title-report' => '問題点の報告',
	'visualeditor-savedialog-title-save' => '変更を保存',
	'visualeditor-savedialog-label-review-wrong' => '問題点を報告',
	'visualeditor-savedialog-label-review-good' => 'この内容を保存',
	'visualeditor-savedialog-label-report' => '問題点を報告',
	'visualeditor-savedialog-label-create' => 'ページを作成',
	'visualeditor-savedialog-label-save' => 'ページを保存',
	'visualeditor-savedialog-label-restore' => 'ページを復元',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|件のお知らせ}}',
	'visualeditor-feedback-tool' => 'フィードバックを送信',
	'tooltip-ca-ve-edit' => 'このページをビジュアルエディターで編集する',
	'visualeditor-inspector-title' => '調査',
	'visualeditor-linkinspector-title' => 'ハイパーリンク',
	'visualeditor-linkinspector-label-pagetitle' => 'ページ名',
	'visualeditor-linkinspector-suggest-existing-page' => '既存のページ',
	'visualeditor-linkinspector-suggest-new-page' => '新規ページ',
	'visualeditor-linkinspector-suggest-external-link' => 'ウェブ リンク',
	'visualeditor-formatdropdown-title' => '書式の変更',
	'visualeditor-formatdropdown-format-paragraph' => '段落',
	'visualeditor-formatdropdown-format-heading1' => '見出し 1',
	'visualeditor-formatdropdown-format-heading2' => '見出し 2',
	'visualeditor-formatdropdown-format-heading3' => '見出し 3',
	'visualeditor-formatdropdown-format-heading4' => '見出し 4',
	'visualeditor-formatdropdown-format-heading5' => '見出し 5',
	'visualeditor-formatdropdown-format-heading6' => '見出し 6',
	'visualeditor-formatdropdown-format-preformatted' => '整形済みテキスト',
	'visualeditor-annotationbutton-bold-tooltip' => '太字 $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(⌘+B)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl+B)',
	'visualeditor-annotationbutton-italic-tooltip' => '斜体 $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(⌘+I)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl+I)',
	'visualeditor-annotationbutton-link-tooltip' => 'リンク $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(⌘+K)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl+K)',
	'visualeditor-indentationbutton-indent-tooltip' => 'インデント $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'インデント解除 $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift+Tab)',
	'visualeditor-listbutton-number-tooltip' => '番号付き箇条書き',
	'visualeditor-listbutton-bullet-tooltip' => '番号なし箇条書き',
	'visualeditor-clearbutton-tooltip' => '書式を消去',
	'visualeditor-historybutton-undo-tooltip' => '取り消し $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(⌘+Z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl+Z)',
	'visualeditor-historybutton-redo-tooltip' => 'やり直し $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(⌘+Shift+Z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl+Shift+Z)',
	'visualeditor-inspector-close-tooltip' => '閉じる',
	'visualeditor-inspector-remove-tooltip' => '除去',
	'visualeditor-viewpage-savewarning' => 'まだ保存していませんが、表示モードに本当に戻りますか?',
	'visualeditor-loadwarning' => 'サーバーからデータを読み込む際にエラーが発生しました: $1。再試行してください。',
	'visualeditor-differror' => 'サーバーからデータを読み込む際にエラーが発生しました: $1',
	'visualeditor-saveerror' => 'サーバーにデータを保存する際にエラーが発生しました: $1',
	'visualeditor-editconflict' => '編集競合のため、編集内容を保存できませんでした。この競合を手動で解決しますか?',
	'visualeditor-editsummary' => '編集内容を説明してください',
	'visualeditor-problem' => '問題点の内容を説明してください',
	'visualeditor-aliennode-tooltip' => '申し訳ありませんが、この要素はビジュアルエディターでは編集できません',
	'tag-visualeditor' => '[[Special:Tags|タグ]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|ビジュアルエディター]]',
	'tag-visualeditor-description' => '[[{{MediaWiki:Visualeditor-descriptionpagelink}}|ビジュアルエディター]]を使用した編集',
	'visualeditor-descriptionpagelink' => 'Project:ビジュアルエディター',
	'visualeditor-report-link' => 'foundation:Terms of Use/ja',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'visualeditor' => 'PanyuntingVisual',
	'visualeditor-desc' => 'Panyunting visual kanggo MediaWiki',
	'visualeditor-ca-editsource' => 'Sunting sumber',
	'visualeditor-linkinspector-title' => 'Sunting pranala', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Judhul kaca',
	'visualeditor-formatdropdown-title' => 'Ganti format',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraf',
	'visualeditor-formatdropdown-format-heading1' => 'Irah-irahan 1',
	'visualeditor-formatdropdown-format-heading2' => 'Irah-irahan 2',
	'visualeditor-formatdropdown-format-heading3' => 'Irah-irahan 3',
	'visualeditor-formatdropdown-format-heading4' => 'Irah-irahan 4',
	'visualeditor-formatdropdown-format-heading5' => 'Irah-irahan 5',
	'visualeditor-formatdropdown-format-heading6' => 'Irah-irahan 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Kapraformat',
	'visualeditor-annotationbutton-bold-tooltip' => 'Kandel', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Miring', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Pranala', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Tambah legokan', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Suda legokan', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Daptar angka',
	'visualeditor-listbutton-bullet-tooltip' => 'Daptar poin',
	'visualeditor-clearbutton-tooltip' => 'Resiki pamormatan',
	'visualeditor-historybutton-undo-tooltip' => 'Batalaké', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Pilih manèh', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Sampéyan yakin arep mbalik nèng mode pandelokan tanpa nyimpen dhisik?',
	'visualeditor-loadwarning' => 'Kasalahan nalika ngemot data saka sasana: $1. Sampéyan pingin njajal manèh?',
	'visualeditor-saveerror' => 'Kasalahan nalika nyimpen data nèng sasana: $1.',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author ITshnik
 */
$messages['ka'] = array(
	'visualeditor' => 'ვიზუალური რედაქტორი',
	'visualeditor-desc' => 'მედიავიკის ვიზუალური რედაქტორი',
	'visualeditor-preference-enable' => 'ვიზუალური რედაქტორის ჩართვა(მხოლოდ [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|მთავარ]] და [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|მომხმარებლის]] სახელთა სივრცეში)',
	'visualeditor-mainnamespacepagelink' => 'Project:მთავარი სახელთა სივრცე',
	'visualeditor-usernamespacepagelink' => 'Project:მომხმარებლის სახელთა სივრცე',
	'visualeditor-notification-saved' => 'თქვენი ცვლილებები გვერდზე $1 შენახულია.',
	'visualeditor-notification-created' => '$1 შეიქმნა.',
	'visualeditor-notification-restored' => '$1 აღდგენილია.',
	'visualeditor-notification-reported' => 'თქვენი პრობლემა მიღებულია. მადლობა.',
	'visualeditor-ca-editsource' => 'წყაროს რედაქტირება',
	'visualeditor-linkinspector-title' => 'ჰიპერბმული',
	'visualeditor-linkinspector-label-pagetitle' => 'გვერდის სათაური',
	'visualeditor-linkinspector-suggest-new-page' => 'ახალი გვერდი',
	'visualeditor-formatdropdown-title' => 'ფორმატის ცვლილება',
	'visualeditor-formatdropdown-format-paragraph' => 'პარაგრაფი',
	'visualeditor-formatdropdown-format-heading1' => 'სათაური 1',
	'visualeditor-formatdropdown-format-heading2' => 'სათაური 2',
	'visualeditor-formatdropdown-format-heading3' => 'სათაური 3',
	'visualeditor-formatdropdown-format-heading4' => 'სათაური 4',
	'visualeditor-formatdropdown-format-heading5' => 'სათაური 5',
	'visualeditor-formatdropdown-format-heading6' => 'სათაური 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'მუქი', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'კურსივი', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'ბმული', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'დანომრილი სია',
	'visualeditor-listbutton-bullet-tooltip' => 'მარკირებული სია',
	'visualeditor-historybutton-undo-tooltip' => 'დაბრუნება', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'განმეორება', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'დახურვა',
	'visualeditor-inspector-remove-tooltip' => 'წაშლა',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'visualeditor' => '시각적편집기',
	'visualeditor-desc' => '미디어위키를 위한 시각적 편집기',
	'visualeditor-preference-enable' => '시각적편집기 활성화 ([[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|표준]] 및 [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|사용자]] 이름공간에서만)',
	'visualeditor-mainnamespacepagelink' => 'Project:표준 이름공간',
	'visualeditor-usernamespacepagelink' => 'Project:사용자 이름공간',
	'visualeditor-notification-saved' => '$1 문서에 바뀜을 저장했습니다.',
	'visualeditor-notification-created' => '$1 문서를 만들었습니다.',
	'visualeditor-notification-restored' => '$1 문서를 복구했습니다.',
	'visualeditor-notification-reported' => '문제를 보고했습니다. 감사합니다.',
	'visualeditor-ca-editsource' => '자료 편집',
	'visualeditor-ca-ve-edit' => '시각적편집기',
	'visualeditor-ca-ve-create' => '시각적편집기',
	'visualeditor-toolbar-savedialog' => '검토하고 저장',
	'visualeditor-savedialog-title-review' => '바뀜 검토하기',
	'visualeditor-savedialog-title-report' => '문제 보고',
	'visualeditor-savedialog-title-save' => '바뀜 저장하기',
	'visualeditor-savedialog-label-review-wrong' => '뭔가 잘못',
	'visualeditor-savedialog-label-review-good' => '이 내용 저장',
	'visualeditor-savedialog-label-report' => '문제 보고',
	'visualeditor-savedialog-label-create' => '문서 만들기',
	'visualeditor-savedialog-label-save' => '문서 저장하기',
	'visualeditor-savedialog-label-restore' => '문서 복구',
	'visualeditor-editnotices-tool' => '{{PLURAL:$1|알림}} $1개',
	'visualeditor-feedback-tool' => '피드백 남기기',
	'tooltip-ca-ve-edit' => '시각적편집기로 이 문서 편집',
	'visualeditor-inspector-title' => '검사',
	'visualeditor-linkinspector-title' => '하이퍼링크',
	'visualeditor-linkinspector-label-pagetitle' => '문서 제목',
	'visualeditor-linkinspector-suggest-existing-page' => '기존 문서',
	'visualeditor-linkinspector-suggest-new-page' => '새 문서',
	'visualeditor-linkinspector-suggest-external-link' => '웹 링크',
	'visualeditor-formatdropdown-title' => '서식 바꾸기',
	'visualeditor-formatdropdown-format-paragraph' => '문단',
	'visualeditor-formatdropdown-format-heading1' => '1단계 문단 제목',
	'visualeditor-formatdropdown-format-heading2' => '2단계 문단 제목',
	'visualeditor-formatdropdown-format-heading3' => '3단계 문단 제목',
	'visualeditor-formatdropdown-format-heading4' => '4단계 문단 제목',
	'visualeditor-formatdropdown-format-heading5' => '5단계 문단 제목',
	'visualeditor-formatdropdown-format-heading6' => '6단계 문단 제목',
	'visualeditor-formatdropdown-format-preformatted' => '서식 지정',
	'visualeditor-annotationbutton-bold-tooltip' => '굵은 글씨 $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(⌘ + B)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + B)',
	'visualeditor-annotationbutton-italic-tooltip' => '기울인 글씨 $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(⌘ + I)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + I)',
	'visualeditor-annotationbutton-link-tooltip' => '링크 $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(⌘ + K)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + K)',
	'visualeditor-indentationbutton-indent-tooltip' => '들여쓰기 높이기 $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => '들여쓰기 낮추기 $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => '번호가 매겨진 목록',
	'visualeditor-listbutton-bullet-tooltip' => '글머리 기호 목록',
	'visualeditor-clearbutton-tooltip' => '서식 지우기',
	'visualeditor-historybutton-undo-tooltip' => '되돌리기 $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(⌘ + Z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + Z)',
	'visualeditor-historybutton-redo-tooltip' => '다시 실행 $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(⌘ + Shift + Z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Shift + Z)',
	'visualeditor-inspector-close-tooltip' => '닫기',
	'visualeditor-inspector-remove-tooltip' => '제거',
	'visualeditor-viewpage-savewarning' => '먼저 저장하지 않고 보기 모드로 돌아가겠습니까?',
	'visualeditor-loadwarning' => '서버에서 데이터를 불러오는 중 오류가 났습니다: $1 다시 시도하겠습니까?',
	'visualeditor-differror' => '서버에서 데이터를 불러오는 중 오류가 났습니다: $1',
	'visualeditor-saveerror' => '서버에 데이터를 저장하는 중 오류가 났습니다: $1',
	'visualeditor-editconflict' => '편집 충돌 때문에 바뀜을 저장할 수 없습니다. 수동으로 충돌을 해결하겠습니까?',
	'visualeditor-editsummary' => '바꾼 내용 설명',
	'visualeditor-problem' => '뭐가 잘못됐는지 설명하세요',
	'visualeditor-aliennode-tooltip' => '죄송합니다, 이 요소는 시각적편집기를 사용하여 편집할 수 없습니다',
	'tag-visualeditor' => '[[Special:Tags|태그]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|시각적편집기]]',
	'tag-visualeditor-description' => '[[{{MediaWiki:Visualeditor-descriptionpagelink}}|시각적편집기]]를 사용해 편집',
	'visualeditor-descriptionpagelink' => 'Project:시각적편집기',
	'visualeditor-alphawarning' => '[[{{MediaWiki:Visualeditor-descriptionpagelink}}|시각적편집기]]의 알파 버전을 사용하고 있습니다. 속도가 느릴 수 있으며 잘못 바뀔 수 있으니 각 편집을 확인하시기 바랍니다.',
	'visualeditor-report-notice' => '나는 제출을 클릭하면 분석에 저장될 바뀜과 피드백을 전달한다는 점을 알고 있습니다. 나는 [[{{MediaWiki:Visualeditor-report-link}}|이용 약관]]에 따라 피드백을 제공하는 데 동의합니다.',
	'visualeditor-report-link' => 'foundation:Terms of Use/ko',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'visualeditor' => 'Sigge beldlesch beärbeide',
	'visualeditor-desc' => 'Määd_et müjjelesch, em MedijaWikki Sigge beldlesch ze beärbeide.',
	'visualeditor-notification-saved' => 'Ding Änderonge aan dä Sigg „$1“ sin faßjehalde.',
	'visualeditor-notification-created' => 'Di Sigg „$1“ es aanjelaat woode.',
	'visualeditor-ca-editsource' => 'der Quälltäx ändere',
	'visualeditor-ca-ve-edit' => 'Sigge beldlesch beärbeide',
	'visualeditor-ca-ve-create' => 'Sigge beldlesch beärbeide',
	'visualeditor-savedialog-title-report' => 'E Probleem mälde',
	'visualeditor-savedialog-title-save' => 'Donn Ding Änderonge faßhallde',
	'visualeditor-savedialog-label-review-wrong' => 'Et es jät scheif jelofe',
	'visualeditor-savedialog-label-review-good' => 'Sühd jood uß för mesch',
	'visualeditor-savedialog-label-report' => 'E Probleem mälde',
	'visualeditor-savedialog-label-create' => 'De Sigg aanlääje',
	'visualeditor-savedialog-label-save' => 'De Sigg faßhallde',
	'visualeditor-savedialog-label-restore' => 'De Sigg reröck holle',
	'visualeditor-feedback-tool' => 'Jivv_en Röckmäldong',
	'visualeditor-inspector-title' => 'Inschpezeere',
	'visualeditor-linkinspector-title' => 'Lengk ändere', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Siggetittel',
	'visualeditor-linkinspector-suggest-existing-page' => 'En Sigg, di ald doh es',
	'visualeditor-linkinspector-suggest-new-page' => 'En neue Sigg',
	'visualeditor-linkinspector-suggest-external-link' => 'Ene Wäblengk',
	'visualeditor-formatdropdown-title' => 'De Fommateerong ändere',
	'visualeditor-formatdropdown-format-paragraph' => 'Afschnett',
	'visualeditor-formatdropdown-format-heading1' => 'Övverschreff 1',
	'visualeditor-formatdropdown-format-heading2' => 'Övverschreff 2',
	'visualeditor-formatdropdown-format-heading3' => 'Övverschreff 3',
	'visualeditor-formatdropdown-format-heading4' => 'Övverschreff 4',
	'visualeditor-formatdropdown-format-heading5' => 'Övverschreff 5',
	'visualeditor-formatdropdown-format-heading6' => 'Övverschreff 6',
	'visualeditor-formatdropdown-format-preformatted' => 'De Fommateerong es ald doh',
	'visualeditor-annotationbutton-bold-tooltip' => 'Fätte Schreff', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Scheive Schreff', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'ene Lengk', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Mieh enjeröck', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Winnijer enjeröck', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'En Leß met Nommere',
	'visualeditor-listbutton-bullet-tooltip' => 'Leß met Pungkte',
	'visualeditor-clearbutton-tooltip' => 'Fomaateeronge fottnämme',
	'visualeditor-historybutton-undo-tooltip' => 'Donn de läzde Änderong zeröck nämme', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Donn dat norr_ens', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Zohmaache',
	'visualeditor-inspector-remove-tooltip' => 'Fottnämme',
	'visualeditor-viewpage-savewarning' => 'Wells De verhaftesch retuur jonn op et beldlesch Beärbeide, der ohne eeds_ens di Sigg met Dinge Änderonge em Wiki faßzehallde?',
	'visualeditor-loadwarning' => 'Ene Fähler es opjetrodde beim Daate Laade vum däm ẞööver: <i lang="en">$1</i>.',
	'visualeditor-saveerror' => 'Ene Fähler es opjetrodde beim Daate Faßhallde op däm ẞööver: <i lang="en">$1</i>.',
	'visualeditor-editsummary' => 'Donn beschriive, wat De jeändert häs.',
	'visualeditor-problem' => 'Donn beschrieve, wat scheif jejange es',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'visualeditor' => 'WYSIWYG-Editeur',
	'visualeditor-desc' => 'WYSIWYG-Editeur fir MediaWiki',
	'visualeditor-ca-editsource' => 'Quelltext änneren',
	'visualeditor-linkinspector-title' => 'Link änneren', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Titel vun der Säit',
	'visualeditor-linkinspector-suggest-new-page' => 'Nei Säit',
	'visualeditor-formatdropdown-title' => 'Format änneren',
	'visualeditor-formatdropdown-format-paragraph' => 'Abschnitt',
	'visualeditor-formatdropdown-format-heading1' => 'Iwwerschrëft 1',
	'visualeditor-formatdropdown-format-heading2' => 'Iwwerschrëft 2',
	'visualeditor-formatdropdown-format-heading3' => 'Iwwerschrëft 3',
	'visualeditor-formatdropdown-format-heading4' => 'Iwwerschrëft 4',
	'visualeditor-formatdropdown-format-heading5' => 'Iwwerschrëft 5',
	'visualeditor-formatdropdown-format-heading6' => 'Iwwerschrëft 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Virformatéiert',
	'visualeditor-annotationbutton-bold-tooltip' => 'Fett', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiv', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Link', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Numeréiert Lëscht',
	'visualeditor-listbutton-bullet-tooltip' => 'Lëscht mat Punkten',
	'visualeditor-clearbutton-tooltip' => 'Format ewechhuelen',
	'visualeditor-historybutton-undo-tooltip' => 'Zréck setzen', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Widderhuelen', # Fuzzy
	'visualeditor-saveerror' => 'Feeler beim Späichere vun den Donnéeën op de Server: $1.',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'visualeditor-feedback-prompt' => 'Palikti atsiliepimą',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'visualeditor' => 'Визуелен уредник',
	'visualeditor-desc' => 'Визуелен уредник за МедијаВики',
	'visualeditor-preference-enable' => 'Овозможи ВизуеленУредник (само во [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|главниот]] и [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|корисничкиот]] именски простор)',
	'visualeditor-mainnamespacepagelink' => 'Project:Главен именски простор',
	'visualeditor-usernamespacepagelink' => 'Project:Главен именски простор',
	'visualeditor-notification-saved' => 'Измените во $1 се зачувани',
	'visualeditor-notification-created' => 'Создавањето на $1 заврши успешно!',
	'visualeditor-notification-restored' => '$1 е повратена.',
	'visualeditor-notification-reported' => 'Проблемот е пријавен. Ви благодариме.',
	'visualeditor-ca-editsource' => 'Уреди извор',
	'visualeditor-ca-ve-edit' => 'ВизуеленУредник',
	'visualeditor-ca-ve-create' => 'ВизуеленУредник',
	'visualeditor-toolbar-savedialog' => 'Провери и зачувај',
	'visualeditor-savedialog-title-review' => 'Проверете ги вашите промени',
	'visualeditor-savedialog-title-report' => 'Пријави проблем',
	'visualeditor-savedialog-title-save' => 'Зачувајте ги промените',
	'visualeditor-savedialog-label-review-wrong' => 'Нешто не е во ред',
	'visualeditor-savedialog-label-review-good' => 'Ми изгледа добро',
	'visualeditor-savedialog-label-report' => 'Пријави проблем',
	'visualeditor-savedialog-label-create' => 'Создај страница',
	'visualeditor-savedialog-label-save' => 'Зачувај',
	'visualeditor-savedialog-label-restore' => 'Поврати страница',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|известување|известувања}}',
	'visualeditor-feedback-tool' => 'Дајте мислење',
	'tooltip-ca-ve-edit' => 'Уреди ја страницава со ВизуеленУредник',
	'visualeditor-inspector-title' => 'Контр. преглед',
	'visualeditor-linkinspector-title' => 'Хиперврска',
	'visualeditor-linkinspector-label-pagetitle' => 'Наслов на страницата',
	'visualeditor-linkinspector-suggest-existing-page' => 'Постоечка страница',
	'visualeditor-linkinspector-suggest-new-page' => 'Нова страница',
	'visualeditor-linkinspector-suggest-external-link' => 'Надворешна врска',
	'visualeditor-formatdropdown-title' => 'Смени формат',
	'visualeditor-formatdropdown-format-paragraph' => 'Пасус',
	'visualeditor-formatdropdown-format-heading1' => 'Наслов 1',
	'visualeditor-formatdropdown-format-heading2' => 'Наслов 2',
	'visualeditor-formatdropdown-format-heading3' => 'Наслов 3',
	'visualeditor-formatdropdown-format-heading4' => 'Наслов 4',
	'visualeditor-formatdropdown-format-heading5' => 'Наслов 5',
	'visualeditor-formatdropdown-format-heading6' => 'Наслов 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Претформатирано',
	'visualeditor-annotationbutton-bold-tooltip' => 'Задебелено $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(⌘ + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Косо $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(⌘ + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Врска $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(⌘ + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Зголеми вовлекување $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Намали вовлекување $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Список со редни броеви',
	'visualeditor-listbutton-bullet-tooltip' => 'Список со потточки',
	'visualeditor-clearbutton-tooltip' => 'Исчисти форматирање',
	'visualeditor-historybutton-undo-tooltip' => 'Откажи $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(⌘ + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Повтори $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(⌘ + Shift + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Shift + z)',
	'visualeditor-inspector-close-tooltip' => 'Затвори',
	'visualeditor-inspector-remove-tooltip' => 'Отстрани',
	'visualeditor-viewpage-savewarning' => 'Дали сте сигурни дека сакате да се вратите на прегледниот режим без прво да ги ачувате измените?',
	'visualeditor-loadwarning' => 'Грешка при вчитување на податоците од опслужувачот: $1. Дали сакате да пробате одново?',
	'visualeditor-differror' => 'Грешка при вчитувањето на податоците од опслужувачот: $1.',
	'visualeditor-saveerror' => 'Грешка при зачувување на податоците во опслужувачот: $1.',
	'visualeditor-editconflict' => 'Не можев да ги зачувам вашите промени поради спротиставеност во уредувања. Дали би сакале да го решите ова рачно?',
	'visualeditor-editsummary' => 'Опишете ги направените измени',
	'visualeditor-problem' => 'Опишете што не е во ред',
	'visualeditor-aliennode-tooltip' => 'Нажалост, овој елемент не може да се уредува со ВизуеленУредник',
	'tag-visualeditor' => '[[Special:Tags|Ознака]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|ВизуеленУредник]]',
	'tag-visualeditor-description' => 'Уредувањето е извршено со [[{{MediaWiki:Visualeditor-descriptionpagelink}}|ВизуеленУредник]]',
	'visualeditor-descriptionpagelink' => 'Project:ВизуеленУредник',
	'visualeditor-alphawarning' => 'Користите алфа-верзија на [[{{MediaWiki:Visualeditor-descriptionpagelink}}|ВизуеленУредник]]. Имајте предвид дека може да биде бавен и да прави некои погрешни измени - затоа, проверувајте го секое извршено уредување.',
	'visualeditor-report-notice' => 'Разбирам дека стискајќи (поднесувајќи) го ова, ќе ги пренесам моите промени и одѕивот на место кајшто ќе бидат складирани за анализа. Се согласувам мојот одѕив да се поведува по [[{{MediaWiki:Visualeditor-report-link}}|Условите на употреба]].',
	'visualeditor-report-link' => 'foundation:Terms of Use/mk',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'visualeditor' => 'കണ്ടുതിരുത്തൽ സൗകര്യം',
	'visualeditor-desc' => 'മീഡിയവിക്കിയ്ക്കായുള്ള കണ്ടുതിരുത്തൽ സൗകര്യം',
	'visualeditor-preference-enable' => 'കണ്ടുതിരുത്തൽ സൗകര്യം സജ്ജമാക്കുക ([[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|പ്രധാന നാമമേഖലയിലും]] [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|ഉപയോക്തൃനാമമേഖലയിലും]] മാത്രം)',
	'visualeditor-mainnamespacepagelink' => 'Project:പ്രധാന നാമമേഖല',
	'visualeditor-usernamespacepagelink' => 'Project:ഉപയോക്തൃനാമമേഖല',
	'visualeditor-notification-saved' => 'താങ്കൾ $1 എന്ന താളിൽ വരുത്തിയ മാറ്റങ്ങൾ സേവ് ചെയ്തിരിക്കുന്നു.',
	'visualeditor-notification-created' => '$1 എന്ന താൾ സൃഷ്ടിച്ചിരിക്കുന്നു.',
	'visualeditor-notification-restored' => '$1 പുനഃസ്ഥാപിച്ചിരിക്കുന്നു.',
	'visualeditor-notification-reported' => 'താങ്കളുടെ പ്രശ്നം അറിയിച്ചിരിക്കുന്നു. നന്ദി.',
	'visualeditor-ca-editsource' => 'മൂലരൂപം തിരുത്തുക',
	'visualeditor-ca-ve-edit' => 'കണ്ടുതിരുത്തൽ സൗകര്യം',
	'visualeditor-ca-ve-create' => 'കണ്ടുതിരുത്തൽ സൗകര്യം',
	'visualeditor-toolbar-savedialog' => 'സംശോധനം ചെയ്യുക, സേവ് ചെയ്യുക',
	'visualeditor-savedialog-title-review' => 'താങ്കളുടെ മാറ്റങ്ങൾ സംശോധനം ചെയ്യുക',
	'visualeditor-savedialog-title-report' => 'പ്രശ്നമറിയിക്കുക',
	'visualeditor-savedialog-title-save' => 'താങ്കളുടെ വരുത്തിയ മാറ്റങ്ങൾ സേവ് ചെയ്യുക',
	'visualeditor-savedialog-label-review-wrong' => 'എന്തോ കുഴപ്പമുണ്ട്',
	'visualeditor-savedialog-label-review-good' => 'കണ്ടിട്ട് കുഴപ്പമില്ല',
	'visualeditor-savedialog-label-report' => 'പ്രശ്നമറിയിക്കുക',
	'visualeditor-savedialog-label-create' => 'താൾ സൃഷ്ടിക്കുക',
	'visualeditor-savedialog-label-save' => 'താൾ സേവ് ചെയ്യുക',
	'visualeditor-savedialog-label-restore' => 'താൾ പുനഃസ്ഥാപിക്കുക',
	'visualeditor-editnotices-tool' => '{{PLURAL:$1|ഒരു അറിയിപ്പ്|$1 അറിയിപ്പുകൾ}}',
	'visualeditor-feedback-tool' => 'പ്രതികരണം ചേർക്കുക',
	'tooltip-ca-ve-edit' => 'ഈ താൾ കണ്ടുതിരുത്തൽ സൗകര്യമുപയോഗിച്ച് തിരുത്തുക',
	'visualeditor-inspector-title' => 'പരിശോധിക്കുക',
	'visualeditor-linkinspector-title' => 'ഹൈപ്പർലിങ്ക്',
	'visualeditor-linkinspector-label-pagetitle' => 'താളിന്റെ തലക്കെട്ട്',
	'visualeditor-linkinspector-suggest-existing-page' => 'നിലവിലുള്ള താൾ',
	'visualeditor-linkinspector-suggest-new-page' => 'പുതിയ താൾ',
	'visualeditor-linkinspector-suggest-external-link' => 'വെബ് കണ്ണി',
	'visualeditor-formatdropdown-title' => 'തരം മാറ്റുക',
	'visualeditor-formatdropdown-format-paragraph' => 'ഖണ്ഡിക',
	'visualeditor-formatdropdown-format-heading1' => 'തലക്കെട്ട് 1',
	'visualeditor-formatdropdown-format-heading2' => 'തലക്കെട്ട് 2',
	'visualeditor-formatdropdown-format-heading3' => 'തലക്കെട്ട് 3',
	'visualeditor-formatdropdown-format-heading4' => 'തലക്കെട്ട് 4',
	'visualeditor-formatdropdown-format-heading5' => 'തലക്കെട്ട് 5',
	'visualeditor-formatdropdown-format-heading6' => 'തലക്കെട്ട് 6',
	'visualeditor-formatdropdown-format-preformatted' => 'മുൻപേ ഘടന നിർണ്ണയിച്ചവ',
	'visualeditor-annotationbutton-bold-tooltip' => 'കടുപ്പിക്കുക $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(കമാൻഡ് + ബി)',
	'visualeditor-annotationbutton-italic-tooltip' => 'ചെരിച്ച് $1',
	'visualeditor-annotationbutton-link-tooltip' => 'കണ്ണി $1',
	'visualeditor-indentationbutton-indent-tooltip' => 'അരികിലെ ഇട കൂട്ടുക', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(റ്റാബ്)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'അരികിലെ ഇട കുറയ്ക്കുക $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(ഷിഫ്റ്റ് + റ്റാബ്)',
	'visualeditor-listbutton-number-tooltip' => 'എണ്ണമിട്ട ലിസ്റ്റ്',
	'visualeditor-listbutton-bullet-tooltip' => 'എണ്ണമിടാത്ത ലിസ്റ്റ്',
	'visualeditor-clearbutton-tooltip' => 'രൂപഘടന നീക്കംചെയ്യുക',
	'visualeditor-historybutton-undo-tooltip' => 'തിരസ്കരിക്കുക $1',
	'visualeditor-historybutton-redo-tooltip' => 'വീണ്ടും ചെയ്യുക $1',
	'visualeditor-inspector-close-tooltip' => 'അടയ്ക്കുക',
	'visualeditor-inspector-remove-tooltip' => 'നീക്കം ചെയ്യുക',
	'visualeditor-viewpage-savewarning' => 'സേവ് ചെയ്യാതെ തന്നെ കണ്ടുനോക്കൽ തലത്തിലേയ്ക്ക് തിരിച്ചു പോകണം എന്ന് താങ്കൾക്കുറപ്പാണോ?',
	'visualeditor-loadwarning' => 'സെർവറിൽ നിന്നും വിവരങ്ങൾ ശേഖരിക്കുന്നതിൽ പിഴവുണ്ടായി: $1. വീണ്ടും ശ്രമിക്കണോ?',
	'visualeditor-differror' => 'സെർവറിൽ വിവരങ്ങൾ ശേഖരിക്കുന്നതിൽ പിഴവുണ്ടായി: $1.',
	'visualeditor-saveerror' => 'സെർവറിൽ വിവരങ്ങൾ ശേഖരിക്കുന്നതിൽ പിഴവുണ്ടായി: $1',
	'visualeditor-editconflict' => 'താങ്കൾ വരുത്തിയ മാറ്റങ്ങൾ ഇടയ്ക്ക് മറ്റാരോ മാറ്റങ്ങൾ വരുത്തിയതിനാൽ സേവ് ചെയ്യാൻ കഴിയില്ല. തിരുത്തലുകൾ ഒത്തുചേരാത്തത് താങ്കൾ തന്നെ പരിഹരിക്കുന്നോ?',
	'visualeditor-editsummary' => 'താങ്കൾ എന്താണ് മാറ്റം വരുത്തിയതെന്ന് വിവരിക്കുക',
	'visualeditor-problem' => 'എന്താണ് പിഴച്ചതെന്ന് വിവരിക്കുക',
	'visualeditor-aliennode-tooltip' => 'ക്ഷമിക്കുക, ഈ ഘടകം കണ്ടുതിരുത്തൽ സൗകര്യമുപയോഗിച്ച് തിരുത്താനാവില്ല',
	'tag-visualeditor' => '[[Special:Tags|ടാഗ്]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|കണ്ടുതിരുത്തൽസൗകര്യം]]',
	'tag-visualeditor-description' => '[[{{MediaWiki:Visualeditor-descriptionpagelink}}|കണ്ടുതിരുത്തൽ സൗകര്യമുപയോഗിച്ച്]] നടത്തിയ തിരുത്തൽ',
	'visualeditor-descriptionpagelink' => 'Project:കണ്ടുതിരുത്തൽ സൗകര്യം',
	'visualeditor-alphawarning' => 'താങ്കൾ [[{{MediaWiki:Visualeditor-descriptionpagelink}}|കണ്ടുതിരുത്തൽ സൗകര്യത്തിന്റെ]] ആൽഫാ പതിപ്പ് ആണ് ഉപയോഗിക്കുന്നത്. ഇത് താമസമേറിയതും തെറ്റായ മാറ്റങ്ങൾ ഉണ്ടാക്കുന്നതുമാവാം - ദയവായി താങ്കൾ വരുത്തുന്ന ഓരോ മാറ്റങ്ങളും പരിശോധിക്കുക.',
);

/** Marathi (मराठी)
 * @author Ydyashad
 */
$messages['mr'] = array(
	'visualeditor-inspector-title' => 'तपास',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Alat penyuntingan visual untuk MediaWiki',
	'visualeditor-preference-enable' => 'Hidupkan VisualEditor (hanya di ruang nama [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|utama]] dan [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|pengguna]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Ruang nama utama',
	'visualeditor-usernamespacepagelink' => 'Project:Ruang nama pengguna',
	'visualeditor-notification-saved' => 'Perubahan yang anda lakukan pada $1 telah disimpan.',
	'visualeditor-notification-created' => '$1 telah diwujudkan.',
	'visualeditor-notification-restored' => '$1 telah dipulihkan.',
	'visualeditor-notification-reported' => 'Masalah anda telah dilaporkan. Terima kasih.',
	'visualeditor-ca-editsource' => 'Sunting sumber',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Semak dan simpan',
	'visualeditor-savedialog-title-review' => 'Semak suntingan anda',
	'visualeditor-savedialog-title-report' => 'Laporkan masalah',
	'visualeditor-savedialog-title-save' => 'Simpan suntingan anda',
	'visualeditor-savedialog-label-review-wrong' => 'Ada masalah!',
	'visualeditor-savedialog-label-review-good' => 'OK',
	'visualeditor-savedialog-label-report' => 'Laporkan masalah',
	'visualeditor-savedialog-label-create' => 'Wujudkan halaman baru',
	'visualeditor-savedialog-label-save' => 'Simpan halaman',
	'visualeditor-savedialog-label-restore' => 'Pulihkan halaman',
	'visualeditor-editnotices-tool' => '$1 pemberitahuan',
	'visualeditor-feedback-tool' => 'Tinggalkan maklum balas',
	'tooltip-ca-ve-edit' => 'Sunting halaman ini dengan VisualEditor',
	'visualeditor-inspector-title' => 'Periksa',
	'visualeditor-linkinspector-title' => 'Hiperpautan',
	'visualeditor-linkinspector-label-pagetitle' => 'Tajuk halaman',
	'visualeditor-linkinspector-suggest-existing-page' => 'Halaman sedia ada',
	'visualeditor-linkinspector-suggest-new-page' => 'Halaman baru',
	'visualeditor-linkinspector-suggest-external-link' => 'Pautan sesawang',
	'visualeditor-formatdropdown-title' => 'Tukar format',
	'visualeditor-formatdropdown-format-paragraph' => 'Perenggan',
	'visualeditor-formatdropdown-format-heading1' => 'Pengatas 1',
	'visualeditor-formatdropdown-format-heading2' => 'Pengatas 2',
	'visualeditor-formatdropdown-format-heading3' => 'Pengatas 3',
	'visualeditor-formatdropdown-format-heading4' => 'Pengatas 4',
	'visualeditor-formatdropdown-format-heading5' => 'Pengatas 5',
	'visualeditor-formatdropdown-format-heading6' => 'Pengatas 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Praformat',
	'visualeditor-annotationbutton-bold-tooltip' => 'Tebal', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Condong', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Pautan', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Jarakkan engsotan', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Rapatkan engsotan', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Senarai bernombor',
	'visualeditor-listbutton-bullet-tooltip' => 'Senarai berbulet',
	'visualeditor-clearbutton-tooltip' => 'Buang pemformatan',
	'visualeditor-historybutton-undo-tooltip' => 'Batalkan', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Pulihkan', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Tutup',
	'visualeditor-inspector-remove-tooltip' => 'Buang',
	'visualeditor-viewpage-savewarning' => 'Adakah anda benar-benar ingin kembali ke ragam paparan tanpa menyimpan terlebih dahulu?',
	'visualeditor-loadwarning' => 'Ralat ketika memuatkan data dari pelayan: $1. Adakah anda hendak mencuba lagi?',
	'visualeditor-differror' => 'Ralat ketika memuatkan data dari pelayan: $1.',
	'visualeditor-saveerror' => 'Ralat ketika memuatkan data dari pelayan: $1',
	'visualeditor-editconflict' => 'Suntingan anda tidak dapat disimpan disebabkan percanggahan antara suntingan. Adakah anda ingin menyelesaikan percanggahan ini sendiri?',
	'visualeditor-editsummary' => 'Terangkan suntingan anda',
	'visualeditor-problem' => 'Sila terangkan apa masalahnya',
	'visualeditor-aliennode-tooltip' => 'Maaf, unsur ini tidak dapat disunting dengan VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Teg]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Disunting dengan menggunakan [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Anda sedang menggunakan versi alfa [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Ia mungkin perlahan dan tersilap membuat perubahan - sila semak setiap suntingan yang anda lakukan.',
	'visualeditor-report-notice' => "Saya memahami bahawa dengan menekan 'hantar', saya akan memancarkan suntingan saya dan maklum balas saya yang akan disimpin untuk dianalisa. Saya bersetuju untuk memberikan maklum balas mengikut [[{{MediaWiki:Visualeditor-report-link}}|Syarat-syarat Penggunaan]].",
	'visualeditor-report-link' => 'foundation:Terms of Use/ms',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Danmichaelo
 * @author Event
 */
$messages['nb'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Visuell redigering for MediaWiki',
	'visualeditor-preference-enable' => 'Aktiviser VisualEditor (bare for hovednavnerommet)', # Fuzzy
	'visualeditor-notification-saved' => 'Dine endringer i $1 er blitt lagret.',
	'visualeditor-notification-created' => '$1 er blitt opprettet.',
	'visualeditor-ca-editsource' => 'Rediger kilde',
	'visualeditor-linkinspector-title' => 'Hyperlenke',
	'visualeditor-linkinspector-label-pagetitle' => 'Sidetittel',
	'visualeditor-linkinspector-suggest-existing-page' => 'Eksisterende side',
	'visualeditor-linkinspector-suggest-new-page' => 'Ny side',
	'visualeditor-linkinspector-suggest-external-link' => 'Weblenke',
	'visualeditor-formatdropdown-title' => 'Endre format',
	'visualeditor-formatdropdown-format-paragraph' => 'Avsnitt',
	'visualeditor-formatdropdown-format-heading1' => 'Overskrift 1',
	'visualeditor-formatdropdown-format-heading2' => 'Overskrift 2',
	'visualeditor-formatdropdown-format-heading3' => 'Overskrift 3',
	'visualeditor-formatdropdown-format-heading4' => 'Overskrift 4',
	'visualeditor-formatdropdown-format-heading5' => 'Overskrift 5',
	'visualeditor-formatdropdown-format-heading6' => 'Overskrift 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformatert',
	'visualeditor-annotationbutton-bold-tooltip' => 'Fet', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiv', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Lenke', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Øk innrykk', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Reduser innrykk', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Nummerert liste',
	'visualeditor-listbutton-bullet-tooltip' => 'Punktliste',
	'visualeditor-clearbutton-tooltip' => 'Fjern formatering',
	'visualeditor-historybutton-undo-tooltip' => 'Angre', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Gjør om', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Er du sikker på at du vil gå tilbake til visningsmodus uten å lagre først?',
	'visualeditor-loadwarning' => 'Det oppsto en feil ved henting av data fra serveren: $1. Vil du prøve på nytt?',
	'visualeditor-saveerror' => 'Det oppsto et problem ved lagring av data til serveren: $1.',
	'visualeditor-editsummary' => 'Beskriv hva du endret',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'visualeditor' => 'दृष्टि सम्पादक',
	'visualeditor-desc' => 'मेडियाविकिको लागि दृष्टि सम्पादक',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Saruman
 * @author Siebrand
 */
$messages['nl'] = array(
	'visualeditor' => 'Vereenvoudigde tekstverwerker',
	'visualeditor-desc' => 'Vereenvoudigde tekstverwerker voor MediaWiki',
	'visualeditor-preference-enable' => 'Visuele tekstverwerker inschakelen (alleen voor de [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|hoofdnaamruimte]] en de [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|gebruikersnaamruimte]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Hoofdnaamruimte',
	'visualeditor-usernamespacepagelink' => 'Project:Gebruikersnaamruimte',
	'visualeditor-notification-saved' => 'Uw wijzigingen aan "$1" zijn opgeslagen',
	'visualeditor-notification-created' => '"$1" is aangemaakt.',
	'visualeditor-notification-restored' => '$1 is teruggeplaatst.',
	'visualeditor-notification-reported' => 'Er is melding gemaakt van het probleem dat u bent tegengekomen. Dank u wel.',
	'visualeditor-ca-editsource' => 'Bron bewerken',
	'visualeditor-ca-ve-edit' => 'Visueel',
	'visualeditor-ca-ve-create' => 'Visueel',
	'visualeditor-toolbar-savedialog' => 'Controleren en opslaan',
	'visualeditor-savedialog-title-review' => 'Wijzigingen controleren',
	'visualeditor-savedialog-title-report' => 'Probleem melden',
	'visualeditor-savedialog-title-save' => 'Wijzigingen opslaan',
	'visualeditor-savedialog-label-review-wrong' => 'Er is iets misgegaan',
	'visualeditor-savedialog-label-review-good' => 'Ziet er goed uit',
	'visualeditor-savedialog-label-report' => 'Probleem melden',
	'visualeditor-savedialog-label-create' => 'Pagina aanmaken',
	'visualeditor-savedialog-label-save' => 'Pagina opslaan',
	'visualeditor-savedialog-label-restore' => 'Pagina terugplaatsen',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|melding|meldingen}}',
	'visualeditor-feedback-tool' => 'Terugkoppeling achterlaten',
	'tooltip-ca-ve-edit' => 'Deze pagina visueel bewerken',
	'visualeditor-inspector-title' => 'Inspecteren',
	'visualeditor-linkinspector-title' => 'Hyperlink',
	'visualeditor-linkinspector-label-pagetitle' => 'Paginanaam',
	'visualeditor-linkinspector-suggest-existing-page' => 'Bestaande pagina',
	'visualeditor-linkinspector-suggest-new-page' => 'Nieuwe pagina',
	'visualeditor-linkinspector-suggest-external-link' => 'Webkoppeling',
	'visualeditor-formatdropdown-title' => 'Opmaak wijzigen',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraaf',
	'visualeditor-formatdropdown-format-heading1' => 'Kop 1',
	'visualeditor-formatdropdown-format-heading2' => 'Kop 2',
	'visualeditor-formatdropdown-format-heading3' => 'Kop 3',
	'visualeditor-formatdropdown-format-heading4' => 'Kop 4',
	'visualeditor-formatdropdown-format-heading5' => 'Kop 5',
	'visualeditor-formatdropdown-format-heading6' => 'Kop 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Vooraf opgemaakt',
	'visualeditor-annotationbutton-bold-tooltip' => 'Vet $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Command + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Control + b)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursief $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Command + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Control + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Koppeling $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Command + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Control + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Inspringing vergroten $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Inspringing verkleinen $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift + Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Genummerde lijst',
	'visualeditor-listbutton-bullet-tooltip' => 'Ongenummerde lijst',
	'visualeditor-clearbutton-tooltip' => 'Opmaak wissen',
	'visualeditor-historybutton-undo-tooltip' => 'Ongedaan maken $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Command + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Control + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Opnieuw uitvoeren $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Command + Shift + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Control + Shift + z)',
	'visualeditor-inspector-close-tooltip' => 'Sluiten',
	'visualeditor-inspector-remove-tooltip' => 'Verwijderen',
	'visualeditor-viewpage-savewarning' => 'Weet u zeker dat u wilt teruggaan naar de modus bekijken zonder eerst op te slaan?',
	'visualeditor-loadwarning' => 'Fout tijdens het laden van gegevens van de server: $1. Wilt u het opnieuw proberen?',
	'visualeditor-differror' => 'Er is een fout opgetreden tijdens het opslaan van gegevens naar de server: $1.',
	'visualeditor-saveerror' => 'Fout tijdens het opslaan van gegevens naar de server: $1.',
	'visualeditor-editconflict' => 'Uw wijzigingen konden niet opgeslagen worden vanwege een bewerkingsconflict. Wilt u het conflict handmatig oplossen?',
	'visualeditor-editsummary' => 'Beschrijf wat u hebt gewijzigd',
	'visualeditor-problem' => 'Beschrijf wat er verkeerd is gegaan',
	'visualeditor-aliennode-tooltip' => 'Dit element kan helaas niet bewerkt worden met de Visuele tekstverwerker',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Visuele tekstverwerker]]',
	'tag-visualeditor-description' => 'Bewerking gemaakt met behulp van de [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Visuele tekstverwerker]]',
	'visualeditor-descriptionpagelink' => 'Project:Visuele tekstverwerker',
	'visualeditor-alphawarning' => 'U gebruikt een versie van de [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Visuele tekstverwerker]] waar nog hard aan wordt gewerkt. Deze functie kan langzaam zijn en fouten bevatten. Controleer alstublieft iedere bewerking die u maakt.',
	'visualeditor-report-notice' => 'Ik begrijp dat door te klikken op "Opslaan" mijn wijzigingen en mijn terugkoppeling worden opgeslagen voor latere analyse. Ik ga akkoord met het geven van terugkoppelingen volgens de [[{{MediaWiki:Visualeditor-report-link}}|Gebruiksvoorwaarden]].',
	'visualeditor-report-link' => 'foundation:Terms_of_Use/nl',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'visualeditor-annotationbutton-bold-tooltip' => 'Gras $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(Comanda + b)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl + b)',
	'visualeditor-annotationbutton-italic-tooltip' => '$1 en italica',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(Comanda + i)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl + i)',
	'visualeditor-annotationbutton-link-tooltip' => 'Ligam $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(Comanda + k)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl + k)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar l’indentacion $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Onglet)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Demesir l’indentacion $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Maj + Tab)',
	'visualeditor-historybutton-undo-tooltip' => 'Anullar $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(Comanda + z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl + z)',
	'visualeditor-historybutton-redo-tooltip' => 'Refar $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(Comanda + Maj + z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl + Maj + z)',
);

/** Ossetic (Ирон)
 * @author Bouron
 */
$messages['os'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Visual MediaWiki-йæн',
	'visualeditor-mainnamespacepagelink' => 'Project:Сæйраг номдон',
	'visualeditor-usernamespacepagelink' => 'Project:Архайæджы номдон',
	'visualeditor-notification-saved' => '{{grammar:genitive|$1}} цы ивтай, уый æвæрд æрцыд.',
	'visualeditor-notification-created' => '$1 конд æрцыд.',
	'visualeditor-notification-restored' => '$1 фæлхатт æрцыд.',
	'visualeditor-notification-reported' => 'Дæ проблемæ амынд æрцыд. Бузныг.',
	'visualeditor-ca-editsource' => 'Бындур ивын',
	'visualeditor-ca-ve-edit' => 'Уындæй ивæн',
	'visualeditor-ca-ve-create' => 'Уындæй ивæн',
	'visualeditor-toolbar-savedialog' => 'Фенын æмæ нывæрын',
	'visualeditor-savedialog-title-review' => 'Фен цы фæивтай',
	'visualeditor-savedialog-title-report' => 'Проблемæ бацамонын',
	'visualeditor-savedialog-title-save' => 'Ивдтытæ нывæрын',
	'visualeditor-savedialog-label-review-wrong' => 'Цыдæр раст нæу',
	'visualeditor-savedialog-label-review-good' => 'Мæнмæ хорз кæсы',
	'visualeditor-savedialog-label-report' => 'Проблемæ бацамонын',
	'visualeditor-savedialog-label-create' => 'Фарс бакæнын',
	'visualeditor-savedialog-label-save' => 'Фарс нывæрын',
	'visualeditor-savedialog-label-restore' => 'Фарс рацаразын',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|хъусинаг|хъусинагы}}',
	'visualeditor-feedback-tool' => 'Хъуыды зæгъын',
	'tooltip-ca-ve-edit' => 'Фæив ацы фарс визуалон ивæнæй',
	'visualeditor-inspector-title' => 'Басгарын',
	'visualeditor-linkinspector-title' => 'Гиперлинк',
	'visualeditor-linkinspector-label-pagetitle' => 'Фарсы сæр',
	'visualeditor-linkinspector-suggest-existing-page' => 'Уæвæг фарс',
	'visualeditor-linkinspector-suggest-new-page' => 'Ног фарс',
	'visualeditor-linkinspector-suggest-external-link' => 'Веб æрвитæн',
	'visualeditor-formatdropdown-title' => 'Формат фæивынæн',
	'visualeditor-formatdropdown-format-paragraph' => 'Абзац',
	'visualeditor-formatdropdown-format-heading1' => 'Сæр 1',
	'visualeditor-formatdropdown-format-heading2' => 'Сæр 2',
	'visualeditor-formatdropdown-format-heading3' => 'Сæр 3',
	'visualeditor-formatdropdown-format-heading4' => 'Сæр 4',
	'visualeditor-formatdropdown-format-heading5' => 'Сæр 5',
	'visualeditor-formatdropdown-format-heading6' => 'Сæр 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Разформатгонд',
	'visualeditor-annotationbutton-bold-tooltip' => 'Бæзджын $1',
	'visualeditor-annotationbutton-italic-tooltip' => 'Къæдз $1',
	'visualeditor-annotationbutton-link-tooltip' => 'Ӕрвитæн', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Арфдæр ахæссын', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Фæстæмæ рахæссын', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Нымад номхыгъд',
	'visualeditor-listbutton-bullet-tooltip' => 'Нысангонд номхыгъд',
	'visualeditor-clearbutton-tooltip' => 'Фæлынст схафын',
	'visualeditor-historybutton-undo-tooltip' => 'Раивын', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Баивын', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Сæхгæнын',
	'visualeditor-inspector-remove-tooltip' => 'Схафын',
	'visualeditor-viewpage-savewarning' => 'Æцæг дæ фæнды æнæ нывæрынæй фæстæмæ кæсынмæ ацæуын?',
);

/** Polish (polski)
 * @author Matma Rex
 * @author Mikołka
 * @author Odie2
 */
$messages['pl'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Edytor graficzny MediaWiki',
	'visualeditor-preference-enable' => 'Uaktywnij VisualEditor (tylko w [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|głównej przestrzeni nazw]])', # Fuzzy
	'visualeditor-mainnamespacepagelink' => 'Project:Main namespace',
	'visualeditor-usernamespacepagelink' => 'Project:Strona użytkownika',
	'visualeditor-notification-saved' => 'Twoje zmiany na stronie „$1” zostały zapisane.',
	'visualeditor-notification-created' => 'Strona „$1” została utworzona.',
	'visualeditor-notification-restored' => '$1 przywrócone.',
	'visualeditor-notification-reported' => 'Problem został zgłoszony. Dziękujemy.',
	'visualeditor-ca-editsource' => 'Edytuj kod źródłowy',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Sprawdź i zapisz',
	'visualeditor-savedialog-title-review' => 'Przeglądnij swoje zmiany',
	'visualeditor-savedialog-title-report' => 'Zgłoś problem',
	'visualeditor-savedialog-title-save' => 'Zapisz zmiany',
	'visualeditor-savedialog-label-review-wrong' => 'Coś jest nie tak',
	'visualeditor-savedialog-label-review-good' => 'Wygląda w porządku',
	'visualeditor-savedialog-label-report' => 'Zgłoś problem',
	'visualeditor-savedialog-label-create' => 'Utwórz stronę',
	'visualeditor-savedialog-label-save' => 'Zapisz stronę',
	'visualeditor-savedialog-label-restore' => 'Przywróć stronę',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|ogłoszenie|ogłoszenia}}',
	'visualeditor-feedback-tool' => 'Prześlij opinię',
	'tooltip-ca-ve-edit' => 'Edytuj tą stronę z VisualEditor',
	'visualeditor-inspector-title' => 'Zbadaj',
	'visualeditor-linkinspector-title' => 'Hiperłącze',
	'visualeditor-linkinspector-label-pagetitle' => 'Tytuł strony',
	'visualeditor-linkinspector-suggest-existing-page' => 'Istniejąca strona',
	'visualeditor-linkinspector-suggest-new-page' => 'Nowa strona',
	'visualeditor-linkinspector-suggest-external-link' => 'Link zewnętrzny',
	'visualeditor-formatdropdown-title' => 'Zmień formatowanie',
	'visualeditor-formatdropdown-format-paragraph' => 'Akapit',
	'visualeditor-formatdropdown-format-heading1' => 'Nagłówek 1',
	'visualeditor-formatdropdown-format-heading2' => 'Nagłówek 2',
	'visualeditor-formatdropdown-format-heading3' => 'Nagłówek 3',
	'visualeditor-formatdropdown-format-heading4' => 'Nagłówek 4',
	'visualeditor-formatdropdown-format-heading5' => 'Nagłówek 5',
	'visualeditor-formatdropdown-format-heading6' => 'Nagłówek 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Stała szerokość czcionki',
	'visualeditor-annotationbutton-bold-tooltip' => 'Pogrubienie', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursywa', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Link', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Zwiększ wcięcie', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Zmniejsz wcięcie', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerowana',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista wypunktowana',
	'visualeditor-clearbutton-tooltip' => 'Wyczyść formatowanie',
	'visualeditor-historybutton-undo-tooltip' => 'Cofnij', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Ponów', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Zamknij',
	'visualeditor-inspector-remove-tooltip' => 'Usuń',
	'visualeditor-differror' => 'Błąd podczas ładowania danych z serwera: $1',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Edycja z wykorzystaniem [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Używasz wersji alpha [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Może być on powolny i wykonywać błędne zmiany - proszę sprawdź każdą stronę, którą tworzysz.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'visualeditor' => 'Editor Visual',
	'visualeditor-desc' => 'Editor visual për MediaWiki',
	'visualeditor-preference-enable' => 'Abìlita VisualEditor (mach ant lë spassi nominal [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|prinsipal]] e [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|utent]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Spassi nominal prinsipal',
	'visualeditor-usernamespacepagelink' => 'Project:Spassi nominal utent',
	'visualeditor-notification-saved' => 'Tò cambi a $1 a son stàit salvà.',
	'visualeditor-notification-created' => "$1 a l'é stàit creà.",
	'visualeditor-notification-restored' => "$1 a l'é stàit ripristinà.",
	'visualeditor-notification-reported' => "Tò problem a l'é stàit arportà. Mersì.",
	'visualeditor-ca-editsource' => 'Modifiché la sorgiss',
	'visualeditor-ca-ve-edit' => 'Editor Visual',
	'visualeditor-ca-ve-create' => 'Editor Visual',
	'visualeditor-toolbar-savedialog' => 'Revision-a e salva',
	'visualeditor-savedialog-title-review' => 'Revision-a toe modìfiche',
	'visualeditor-savedialog-title-report' => 'Arpòrta un problem',
	'visualeditor-savedialog-title-save' => 'Salvé le modìfiche',
	'visualeditor-savedialog-label-review-wrong' => "Quaicòs a l'é falì",
	'visualeditor-savedialog-label-review-good' => 'A smija bon a mi',
	'visualeditor-savedialog-label-report' => 'Signalé un problema',
	'visualeditor-savedialog-label-create' => 'Creé la pàgina',
	'visualeditor-savedialog-label-save' => 'Salva la pàgina',
	'visualeditor-savedialog-label-restore' => 'Ripristina pagina',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|neuva|neuve}}',
	'visualeditor-feedback-tool' => "Lassé n'opinion",
	'tooltip-ca-ve-edit' => 'Modìfica sta pagina con VisualEditor',
	'visualeditor-inspector-title' => 'Ispession-a',
	'visualeditor-linkinspector-title' => 'Colegament ipertestual',
	'visualeditor-linkinspector-label-pagetitle' => 'Tìtol ëd la pàgina',
	'visualeditor-linkinspector-suggest-existing-page' => 'Pagina esistenta',
	'visualeditor-linkinspector-suggest-new-page' => 'Pàgina neuva',
	'visualeditor-linkinspector-suggest-external-link' => 'Colegament dla Ragnà',
	'visualeditor-formatdropdown-title' => 'Cangia formà',
	'visualeditor-formatdropdown-format-paragraph' => 'Paràgraf',
	'visualeditor-formatdropdown-format-heading1' => 'Antestassion 1',
	'visualeditor-formatdropdown-format-heading2' => 'Antestassion 2',
	'visualeditor-formatdropdown-format-heading3' => 'Antestassion 3',
	'visualeditor-formatdropdown-format-heading4' => 'Antestassion 4',
	'visualeditor-formatdropdown-format-heading5' => 'Antestassion 5',
	'visualeditor-formatdropdown-format-heading6' => 'Antestassion 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformatà',
	'visualeditor-annotationbutton-bold-tooltip' => 'Grassèt', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Corsiv', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Anliura', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumenta andentassion', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuiss andentassion', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerà',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista pontà',
	'visualeditor-clearbutton-tooltip' => 'Polida formatassion',
	'visualeditor-historybutton-undo-tooltip' => "Buta 'me ch'a l'era", # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Rifà', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Sara',
	'visualeditor-inspector-remove-tooltip' => 'Gava',
	'visualeditor-viewpage-savewarning' => 'It ses-to sigur ëd vorèj andé andré a la manera preuva sensa salvé prima?',
	'visualeditor-loadwarning' => 'Eror cariand dat dal sërvent: $1. It veus-to torna prové?',
	'visualeditor-differror' => 'Eror cariand dat dal sërvent: $1.',
	'visualeditor-saveerror' => 'Eror salvand dat al sërvent: $1.',
	'visualeditor-editconflict' => "It tò cambi a peulo pa esse salvà a causa d'un conflit ëd modìfiche. It veus-to arzòlve ël conflit manualment?",
	'visualeditor-editsummary' => "Descriv lòn ch'iy l'has cangià",
	'visualeditor-problem' => "Descriv lòn ch'a l'é andàit mal",
	'visualeditor-aliennode-tooltip' => 'Spiasent, sto element a peul pa esse modificà dovrand ëd VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Tichëtta]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Modificà dovrand ël [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => "It të stas dovrand na vërsion alfa dël [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. A peul andé pian e fé cambi sbalià - për piasì contròla minca modìfica ch'it fas.",
	'visualeditor-report-notice' => "I seu che sgnacand spediss i trasmëttreu mè cambi a mè coment che a saran memorisà për anàlisi. I son d'acòrd ëd dè dij coment d'acòrdi con ij [[{{MediaWiki:Visualeditor-report-link}}|Termo d'Usagi]].",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'visualeditor-linkinspector-title' => 'تړنه سمول', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'مخ سرليک',
	'visualeditor-linkinspector-suggest-external-link' => 'جال تړنه',
	'visualeditor-formatdropdown-format-heading1' => 'سرليک 1',
	'visualeditor-formatdropdown-format-heading2' => 'سرليک 2',
	'visualeditor-formatdropdown-format-heading3' => 'سرليک 3',
	'visualeditor-formatdropdown-format-heading4' => 'سرليک 4',
	'visualeditor-formatdropdown-format-heading5' => 'سرليک 5',
	'visualeditor-formatdropdown-format-heading6' => 'سرليک 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'زغرد', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'رېوند', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'تړنه', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'شمېرن لړليک',
	'visualeditor-listbutton-bullet-tooltip' => 'ګولۍ داره لړليک',
	'visualeditor-historybutton-undo-tooltip' => 'ناکړل', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'بياکړل', # Fuzzy
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Jaideraf
 * @author Jdforrester
 */
$messages['pt'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Editor visual para o MediaWiki',
	'visualeditor-preference-enable' => 'Ativar VisualEditor (apenas no domínio principal)', # Fuzzy
	'visualeditor-mainnamespacepagelink' => 'Project:Domínio principal',
	'visualeditor-notification-saved' => 'Suas alterações para $1 foram salvas.',
	'visualeditor-notification-created' => 'A página $1 foi criada.',
	'visualeditor-notification-restored' => '$1 foi restaurada.',
	'visualeditor-ca-editsource' => 'Editar código-fonte',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-ca-ve-create' => 'Editor visual',
	'visualeditor-savedialog-label-create' => 'Criar página',
	'visualeditor-savedialog-label-restore' => 'Restaurar página',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|aviso|avisos}}',
	'tooltip-ca-ve-edit' => 'Editar esta página com o VisualEditor',
	'visualeditor-inspector-title' => 'Inspecionar',
	'visualeditor-linkinspector-title' => 'Editar link',
	'visualeditor-linkinspector-label-pagetitle' => 'Título da página',
	'visualeditor-linkinspector-suggest-existing-page' => 'Página existente',
	'visualeditor-linkinspector-suggest-new-page' => 'Página nova',
	'visualeditor-linkinspector-suggest-external-link' => 'Link da Web',
	'visualeditor-formatdropdown-title' => 'Alterar o formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Parágrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Nível 1',
	'visualeditor-formatdropdown-format-heading2' => 'Nível 2',
	'visualeditor-formatdropdown-format-heading3' => 'Nível 3',
	'visualeditor-formatdropdown-format-heading4' => 'Nível 4',
	'visualeditor-formatdropdown-format-heading5' => 'Nível 5',
	'visualeditor-formatdropdown-format-heading6' => 'Nível 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Pré-formatado',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negrito', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Itálico', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Link', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar recuo', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuir recuo', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerada',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista com marcadores',
	'visualeditor-clearbutton-tooltip' => 'Limpar formatação',
	'visualeditor-historybutton-undo-tooltip' => 'Desfazer', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refazer', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Fechar',
	'visualeditor-inspector-remove-tooltip' => 'Remover',
	'visualeditor-viewpage-savewarning' => 'Tem certeza que deseja voltar para a página sem querer salvar a edição?',
	'visualeditor-loadwarning' => 'Erro ao carregar dados do servidor:  $1. Gostaria de tentar novamente?',
	'visualeditor-saveerror' => 'Erro ao salvar dados para o servidor: $1.',
	'visualeditor-editconflict' => 'Suas alterações não puderam ser salvas por causa de um conflito de edição. Você gostaria de resolver o conflito manualmente?',
	'visualeditor-editsummary' => 'Por favor, descreva o que você mudou',
	'visualeditor-aliennode-tooltip' => 'Desculpe, esse elemento não pode ser editado utilizando o VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[Project:VisualEditor|VisualEditor]]', # Fuzzy
	'tag-visualeditor-description' => 'Edição realizada utilizando o [[Project:VisualEditor|VisualEditor]]', # Fuzzy
);

/** Brazilian Portuguese (português do Brasil)
 * @author Jaideraf
 * @author 555
 */
$messages['pt-br'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Editor visual para o MediaWiki',
	'visualeditor-preference-enable' => 'Ativar VisualEditor (apenas nos espaços nominais [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|principal]] e de [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|usuário]])',
	'visualeditor-notification-saved' => 'Suas alterações para $1 foram salvas.',
	'visualeditor-notification-created' => 'A página $1 foi criada.',
	'visualeditor-notification-restored' => '$1 foi restaurado.',
	'visualeditor-ca-editsource' => 'Editar código-fonte',
	'visualeditor-ca-ve-edit' => 'Editor visual',
	'visualeditor-ca-ve-create' => 'Editor visual',
	'visualeditor-savedialog-label-create' => 'Criar página',
	'visualeditor-savedialog-label-restore' => 'Restaurar página',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|aviso|avisos}}',
	'tooltip-ca-ve-edit' => 'Editar esta página com o VisualEditor',
	'visualeditor-inspector-title' => 'Inspecionar',
	'visualeditor-linkinspector-title' => 'Link',
	'visualeditor-linkinspector-label-pagetitle' => 'Título da página',
	'visualeditor-linkinspector-suggest-existing-page' => 'Página existente',
	'visualeditor-linkinspector-suggest-new-page' => 'Página nova',
	'visualeditor-linkinspector-suggest-external-link' => 'Link da Web',
	'visualeditor-formatdropdown-title' => 'Alterar o formato',
	'visualeditor-formatdropdown-format-paragraph' => 'Parágrafo',
	'visualeditor-formatdropdown-format-heading1' => 'Nível 1',
	'visualeditor-formatdropdown-format-heading2' => 'Nível 2',
	'visualeditor-formatdropdown-format-heading3' => 'Nível 3',
	'visualeditor-formatdropdown-format-heading4' => 'Nível 4',
	'visualeditor-formatdropdown-format-heading5' => 'Nível 5',
	'visualeditor-formatdropdown-format-heading6' => 'Nível 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Pré-formatado',
	'visualeditor-annotationbutton-bold-tooltip' => 'Negrito', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Itálico', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Link', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Aumentar recuo', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuir recuo', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Lista numerada',
	'visualeditor-listbutton-bullet-tooltip' => 'Lista com marcadores',
	'visualeditor-clearbutton-tooltip' => 'Limpar formatação',
	'visualeditor-historybutton-undo-tooltip' => 'Desfazer', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refazer', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Fechar',
	'visualeditor-inspector-remove-tooltip' => 'Remover',
	'visualeditor-viewpage-savewarning' => 'Tem certeza que deseja voltar para a página sem querer salvar a edição?',
	'visualeditor-loadwarning' => 'Erro ao carregar dados do servidor:  $1. Gostaria de tentar novamente?',
	'visualeditor-saveerror' => 'Erro ao salvar dados para o servidor:  $1.',
	'visualeditor-editconflict' => 'Suas alterações não puderam ser salvas por causa de um conflito de edição. Você gostaria de resolver o conflito manualmente?',
	'visualeditor-editsummary' => 'Por favor, descreva o que você mudou',
	'visualeditor-aliennode-tooltip' => 'Desculpe, esse elemento não pode ser editado utilizando o VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Tag]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Edição realizada utilizando o [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'visualeditor-ca-editsource' => 'Modificați sursa',
	'visualeditor-savedialog-label-create' => 'Creare pagină',
	'visualeditor-savedialog-label-save' => 'Salvare pagină',
	'visualeditor-savedialog-label-restore' => 'Restaurare pagină',
	'visualeditor-feedback-tool' => 'Lăsați o părere',
	'visualeditor-inspector-title' => 'Inspectare',
	'visualeditor-linkinspector-title' => 'Modificați legătura', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Titlul paginii',
	'visualeditor-linkinspector-suggest-existing-page' => 'Pagină existentă',
	'visualeditor-linkinspector-suggest-new-page' => 'Pagină nouă',
	'visualeditor-linkinspector-suggest-external-link' => 'Legătură web',
	'visualeditor-formatdropdown-title' => 'Modificați formatul',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraf',
	'visualeditor-formatdropdown-format-heading1' => 'Titlu 1',
	'visualeditor-formatdropdown-format-heading2' => 'Titlu 2',
	'visualeditor-formatdropdown-format-heading3' => 'Titlu 3',
	'visualeditor-formatdropdown-format-heading4' => 'Titlu 4',
	'visualeditor-formatdropdown-format-heading5' => 'Titlu 5',
	'visualeditor-formatdropdown-format-heading6' => 'Titlu 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Preformatat',
	'visualeditor-annotationbutton-bold-tooltip' => 'Aldin', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Cursiv', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Legătură', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Măriți indentarea', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Diminuați indentarea', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Listă numerotată',
	'visualeditor-listbutton-bullet-tooltip' => 'Listă cu puncte',
	'visualeditor-clearbutton-tooltip' => 'Curățați formatarea',
	'visualeditor-historybutton-undo-tooltip' => 'Anulare', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Refacere', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Închidere',
	'visualeditor-inspector-remove-tooltip' => 'Eliminare',
);

/** Russian (русский)
 * @author Amire80
 * @author Eugrus
 * @author Kalan
 * @author Ole Yves
 */
$messages['ru'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Визуальный редактор для MediaWiki',
	'visualeditor-preference-enable' => 'Включить VisualEditor (только в [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|основном]] и [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|личном]] пространствах имён).',
	'visualeditor-mainnamespacepagelink' => 'Project:Основное пространство',
	'visualeditor-usernamespacepagelink' => 'Project:Личное пространство',
	'visualeditor-notification-saved' => 'Ваши изменения в $1 были сохранены.',
	'visualeditor-notification-created' => 'Страница $1 была создана.',
	'visualeditor-notification-restored' => 'Прошлая версия на странице $1 была восстановлена.',
	'visualeditor-notification-reported' => 'О возникшей проблеме было сообщено. Спасибо.',
	'visualeditor-ca-editsource' => 'Править исходный текст',
	'visualeditor-ca-ve-edit' => 'Визуальный редактор',
	'visualeditor-ca-ve-create' => 'Визуальный редактор',
	'visualeditor-toolbar-savedialog' => 'Проверить и сохранить',
	'visualeditor-savedialog-title-review' => 'Проверьте ваши правки',
	'visualeditor-savedialog-title-report' => 'Сообщить о проблеме',
	'visualeditor-savedialog-title-save' => 'Сохранить изменения',
	'visualeditor-savedialog-label-review-wrong' => 'Что-то пошло не так',
	'visualeditor-savedialog-label-review-good' => 'Неплохо выглядит для меня',
	'visualeditor-savedialog-label-report' => 'Сообщить о проблеме',
	'visualeditor-savedialog-label-create' => 'Создать страницу',
	'visualeditor-savedialog-label-save' => 'Записать страницу',
	'visualeditor-savedialog-label-restore' => 'Восстановить страницу',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|сообщение|сообщения|сообщений}}',
	'visualeditor-feedback-tool' => 'Оставить отзыв',
	'tooltip-ca-ve-edit' => 'Редактировать данную страницу с визуальным редактором',
	'visualeditor-inspector-title' => 'Проверить',
	'visualeditor-linkinspector-title' => 'Гиперссылка',
	'visualeditor-linkinspector-label-pagetitle' => 'Название страницы',
	'visualeditor-linkinspector-suggest-existing-page' => 'Существующая страница',
	'visualeditor-linkinspector-suggest-new-page' => 'Новая страница',
	'visualeditor-linkinspector-suggest-external-link' => 'Веб-ссылка',
	'visualeditor-formatdropdown-title' => 'Форматирование',
	'visualeditor-formatdropdown-format-paragraph' => 'Абзац',
	'visualeditor-formatdropdown-format-heading1' => 'Заголовок 1',
	'visualeditor-formatdropdown-format-heading2' => 'Заголовок 2',
	'visualeditor-formatdropdown-format-heading3' => 'Заголовок 3',
	'visualeditor-formatdropdown-format-heading4' => 'Заголовок 4',
	'visualeditor-formatdropdown-format-heading5' => 'Заголовок 5',
	'visualeditor-formatdropdown-format-heading6' => 'Заголовок 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Преформатированный',
	'visualeditor-annotationbutton-bold-tooltip' => 'Жирный', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Курсив', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Ссылка', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Увеличить отступ', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Уменьшить отступ', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Нумерованный список',
	'visualeditor-listbutton-bullet-tooltip' => 'Маркированный список',
	'visualeditor-clearbutton-tooltip' => 'Очистить форматирование',
	'visualeditor-historybutton-undo-tooltip' => 'Отменить', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Вернуть', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Закрыть',
	'visualeditor-inspector-remove-tooltip' => 'Убрать',
	'visualeditor-viewpage-savewarning' => 'Вы точно хотите вернуться в режим просмотра, не сохранив изменения?',
	'visualeditor-loadwarning' => 'Ошибка при загрузке данных: $1. Попробовать снова?',
	'visualeditor-differror' => 'Ошибка при загрузке данных с сервера: $1',
	'visualeditor-saveerror' => 'Ошибка при сохранении данных: $1.',
	'visualeditor-editconflict' => 'Ваши изменения не удалось сохранить, потому что произошёл конфликт редактирования. Хотите ли вы разрешить конфликт вручную?',
	'visualeditor-editsummary' => 'Опишите, что изменилось',
	'visualeditor-problem' => 'Опишите, что пошло не так',
	'visualeditor-aliennode-tooltip' => 'Извините, данный элемент не может редактироваться визуальным редактором',
	'tag-visualeditor' => '[[Special:Tags|Тег]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Визуальный редактор]]',
	'tag-visualeditor-description' => 'Правка сделана с использованием [[{{MediaWiki:Visualeditor-descriptionpagelink}}|визуального редактора]]',
	'visualeditor-descriptionpagelink' => 'Project:Визуальный редактор',
	'visualeditor-alphawarning' => 'Вы используете альфа-версию [[{{MediaWiki:Visualeditor-descriptionpagelink}}|визуального редактора]]. Она может быть медленной и делать ошибочные изменения — пожалуйста, проверяйте каждую сделанную правку.',
	'visualeditor-report-notice' => 'Я понимаю, что нажав кнопку отправки я передам свои изменения и свой отзыв, которых будет храниться для анализа. Я согласен с тем, чтобы обеспечить обратную связь в соответствии с [[{{MediaWiki:Visualeditor-report-link}}|условиями использования]].',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'visualeditor-formatdropdown-format-heading1' => 'Надпис 1',
	'visualeditor-formatdropdown-format-heading2' => 'Надпис 2',
	'visualeditor-formatdropdown-format-heading3' => 'Надпис 3',
	'visualeditor-formatdropdown-format-heading4' => 'Надпис 4',
	'visualeditor-formatdropdown-format-heading5' => 'Надпис 5',
	'visualeditor-formatdropdown-format-heading6' => 'Надпис 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Передформатованый',
	'visualeditor-annotationbutton-bold-tooltip' => 'Товсте', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Курзіва', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Одказ', # Fuzzy
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'visualeditor' => 'දෘශ්‍යසංස්කාරක',
	'visualeditor-desc' => 'මීඩියාවිකි සඳහා දෘශ්‍යසංස්කාරක',
	'visualeditor-mainnamespacepagelink' => 'Project:ප්‍රධාන නාමඅවකාශය',
	'visualeditor-usernamespacepagelink' => 'Project:පරිශීලක නාමඅවකාශය',
	'visualeditor-notification-saved' => '$1 වෙත ඔබේ වෙනස්කම් සුරකින ලදී.',
	'visualeditor-notification-created' => '$1 තනන ලදී.',
	'visualeditor-notification-restored' => '$1 ප්‍රතිස්ථාපනය කරන ලදී.',
	'visualeditor-notification-reported' => 'ඔබේ ගැටලුව වාර්තා කරන ලදී. ස්තුතියි.',
	'visualeditor-ca-editsource' => 'මූලාශ්‍රය සංස්කරණය කරන්න',
	'visualeditor-ca-ve-edit' => 'දෘශ්‍යසංස්කාරක',
	'visualeditor-ca-ve-create' => 'දෘශ්‍යසංස්කාරක',
	'visualeditor-toolbar-savedialog' => 'නිරීක්ෂණය කර සුරකින්න',
	'visualeditor-savedialog-title-review' => 'ඔබේ වෙනස්කම් නිරීක්ෂණය කරන්න',
	'visualeditor-savedialog-title-report' => 'ගැටළුවක් වාර්තා කරන්න',
	'visualeditor-savedialog-title-save' => 'ඔබේ වෙනස්කම් සුරකින්න',
	'visualeditor-savedialog-label-review-wrong' => 'මොකක්හරි වැරදියි',
	'visualeditor-savedialog-label-review-good' => 'මට හිතෙන්නේ හොදයි වගේ',
	'visualeditor-savedialog-label-report' => 'ගැටළුව වාර්තා කරන්න',
	'visualeditor-savedialog-label-create' => 'පිටුව තනන්න',
	'visualeditor-savedialog-label-save' => 'පිටුව සුරකින්න',
	'visualeditor-savedialog-label-restore' => 'පිටුව ප්‍රතිෂ්ඨාපනය කරන්න',
	'visualeditor-editnotices-tool' => '{{PLURAL:$1|නිවේදන}} $1',
	'visualeditor-feedback-tool' => 'ප්‍රතිචාරය ලබා දෙන්න',
	'tooltip-ca-ve-edit' => 'දෘශ්‍යසංස්කාරක සමඟ මෙම පිටුව සංස්කරණය කරන්න',
	'visualeditor-inspector-title' => 'පිරික්සන්න',
	'visualeditor-linkinspector-title' => 'අධිසබැඳුම',
	'visualeditor-linkinspector-label-pagetitle' => 'පිටුවේ මාතෘකාව',
	'visualeditor-linkinspector-suggest-existing-page' => 'දැනටමත් පවතින පිටුව',
	'visualeditor-linkinspector-suggest-new-page' => 'නව පිටුව',
	'visualeditor-linkinspector-suggest-external-link' => 'ජාල සබැඳිය',
	'visualeditor-formatdropdown-title' => 'ආකෘතිය වෙනස් කරන්න',
	'visualeditor-formatdropdown-format-paragraph' => 'ඡේදය',
	'visualeditor-formatdropdown-format-heading1' => 'මාතෘකාව 1',
	'visualeditor-formatdropdown-format-heading2' => 'මාතෘකාව 2',
	'visualeditor-formatdropdown-format-heading3' => 'මාතෘකාව 3',
	'visualeditor-formatdropdown-format-heading4' => 'මාතෘකාව 4',
	'visualeditor-formatdropdown-format-heading5' => 'මාතෘකාව 5',
	'visualeditor-formatdropdown-format-heading6' => 'මාතෘකාව 6',
	'visualeditor-formatdropdown-format-preformatted' => 'පෙර ආකෘතිකරණය කරන ලද',
	'visualeditor-annotationbutton-bold-tooltip' => 'තද පැහැ අකුරු', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'ඇළ අකුරු', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'සබැඳුම', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'කඩතොල්ල වැඩි කරන්න', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'කඩතොල්ල අඩු කරන්න', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'අංකිත ලැයිස්තුව',
	'visualeditor-listbutton-bullet-tooltip' => 'බුලට් ලැයිස්තුව',
	'visualeditor-clearbutton-tooltip' => 'ආකෘතිකරණය හිස් කරන්න',
	'visualeditor-historybutton-undo-tooltip' => 'අහෝසිය', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'යළි කරන්න', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'වසන්න',
	'visualeditor-inspector-remove-tooltip' => 'ඉවත් කරන්න',
	'visualeditor-loadwarning' => 'සර්වරය වෙතින් දත්ත පූරණය කිරීමේ දෝෂය: $1. නැවත උත්සහ කිරීමට කැමතිද?',
	'visualeditor-differror' => 'සර්වරය වෙතින් දත්ත පූරණය කිරීමේ දෝෂය: $1.',
	'visualeditor-saveerror' => 'සර්වරය වෙත දත්ත සුරැකීමේ දෝෂය: $1.',
	'visualeditor-editsummary' => 'ඔබ වෙනස් කලේ කුමක්දැයි පහදන්න',
	'visualeditor-problem' => 'ඔබට වැරදුනේ කුමක්දැයි පහදන්න',
	'tag-visualeditor' => '[[Special:Tags|ටැගය]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|දෘශ්‍යසංස්කාරක]]',
	'tag-visualeditor-description' => '[[{{MediaWiki:Visualeditor-descriptionpagelink}}|දෘශ්‍යසංස්කාරක]] භාවිතා කොට සංස්කරණය සිදු කරන ලදී',
	'visualeditor-descriptionpagelink' => 'Project:දෘශ්‍යසංස්කාරක',
);

/** Swedish (svenska)
 * @author Ainali
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Visuell redigerare för MediaWiki',
	'visualeditor-notification-saved' => 'Dina ändringar i $1 har sparats.',
	'visualeditor-notification-created' => '$1 har skapats.',
	'visualeditor-notification-restored' => '$1 har återställts.',
	'visualeditor-notification-reported' => 'Dina problem har rapporterats. Tack.',
	'visualeditor-ca-editsource' => 'Redigera källa',
	'visualeditor-toolbar-savedialog' => 'Granska och spara',
	'visualeditor-savedialog-title-review' => 'Spara dina ändringar',
	'visualeditor-savedialog-title-report' => 'Rapportera ett problem',
	'visualeditor-savedialog-title-save' => 'Spara dina ändringar',
	'visualeditor-savedialog-label-review-wrong' => 'Någonting är fel',
	'visualeditor-savedialog-label-review-good' => 'Ser bra ut för mig',
	'visualeditor-savedialog-label-report' => 'Rapportera problem',
	'visualeditor-savedialog-label-create' => 'Skapa sida',
	'visualeditor-savedialog-label-save' => 'Spara sida',
	'visualeditor-savedialog-label-restore' => 'Återställ sida',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|notis|notiser}}',
	'visualeditor-feedback-tool' => 'Lämna feedback',
	'visualeditor-inspector-title' => 'Inspektera',
	'visualeditor-linkinspector-title' => 'Hyperlänk',
	'visualeditor-linkinspector-label-pagetitle' => 'Sidtitel',
	'visualeditor-linkinspector-suggest-existing-page' => 'Befintlig sida',
	'visualeditor-linkinspector-suggest-new-page' => 'Ny sida',
	'visualeditor-linkinspector-suggest-external-link' => 'Webblänk',
	'visualeditor-formatdropdown-title' => 'Ändra format',
	'visualeditor-formatdropdown-format-paragraph' => 'Paragraf',
	'visualeditor-formatdropdown-format-heading1' => 'Rubrik 1',
	'visualeditor-formatdropdown-format-heading2' => 'Rubrik 2',
	'visualeditor-formatdropdown-format-heading3' => 'Rubrik 3',
	'visualeditor-formatdropdown-format-heading4' => 'Rubrik 4',
	'visualeditor-formatdropdown-format-heading5' => 'Rubrik 5',
	'visualeditor-formatdropdown-format-heading6' => 'Rubrik 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Förformaterad',
	'visualeditor-annotationbutton-bold-tooltip' => 'Fet', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Kursiv', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Länk', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Öka indrag', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Minska indrag', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Numrerad lista',
	'visualeditor-listbutton-bullet-tooltip' => 'Punktlista',
	'visualeditor-clearbutton-tooltip' => 'Radera formatering',
	'visualeditor-historybutton-undo-tooltip' => 'Ångra', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Gör om', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Stäng',
	'visualeditor-inspector-remove-tooltip' => 'Ta bort',
	'visualeditor-viewpage-savewarning' => 'Är du säker på att du vill gå tillbaka till visningsläget utan att spara först?',
	'visualeditor-loadwarning' => 'Fel uppstod vid inläsning av data från server: $1. Vill du försöka igen?',
	'visualeditor-saveerror' => 'Fel uppstod vid sparande av data till server: $1.',
	'visualeditor-editsummary' => 'Beskriv vad du har ändrat',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'visualeditor-ca-editsource' => 'மூலத்தை தொகு',
	'visualeditor-linkinspector-title' => 'இணைப்பைத் தொகு', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'பக்கத்தின் தலைப்பு',
	'visualeditor-linkinspector-suggest-existing-page' => 'உள்ள பக்கம்',
	'visualeditor-linkinspector-suggest-new-page' => 'புதுப் பக்கம்',
	'visualeditor-linkinspector-suggest-external-link' => 'வலையிணைப்பு',
	'visualeditor-formatdropdown-title' => 'வடிவமைப்பை மாற்றுக',
	'visualeditor-formatdropdown-format-paragraph' => 'பத்தி',
	'visualeditor-formatdropdown-format-heading1' => 'தலைப்பு 1',
	'visualeditor-formatdropdown-format-heading2' => 'தலைப்பு 2',
	'visualeditor-formatdropdown-format-heading3' => 'தலைப்பு 3',
	'visualeditor-formatdropdown-format-heading4' => 'தலைப்பு 4',
	'visualeditor-formatdropdown-format-heading5' => 'தலைப்பு 5',
	'visualeditor-formatdropdown-format-heading6' => 'தலைப்பு 6',
	'visualeditor-formatdropdown-format-preformatted' => 'முன்வடிவமைக்கப்பட்டது',
	'visualeditor-annotationbutton-bold-tooltip' => 'தடித்த', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'சாய்ந்த', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'இணைப்பு', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'உள்தள்ளலை அதிகரிக்கவும்', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'உள்தள்ளலை குறைக்கவும்', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'எண்களுடன் வரிசை',
	'visualeditor-listbutton-bullet-tooltip' => 'குண்டுக்குறியிட்ட பட்டியல்',
	'visualeditor-clearbutton-tooltip' => 'வடிவமைத்தலை வெறுமையாக்கு',
	'visualeditor-historybutton-undo-tooltip' => 'மீளமை', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'மீண்டும் செய்', # Fuzzy
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'visualeditor-linkinspector-label-pagetitle' => 'పేజీ శీర్షిక',
	'visualeditor-annotationbutton-bold-tooltip' => 'బొద్దు', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'వాలు', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'లంకె', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'visualeditor' => 'Pampatnugot na Pampaningin',
	'visualeditor-desc' => 'Pampatnugot na pampaningin para sa MediaWiki',
	'visualeditor-notification-saved' => 'Nasagip na ang mga binago mo sa $1.',
	'visualeditor-notification-created' => 'Nalikha na ang $1.',
	'visualeditor-ca-editsource' => 'Baguhin ang pinagmulan',
	'visualeditor-linkinspector-title' => 'Baguhin ang kawing', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'Pamagat ng pahina',
	'visualeditor-linkinspector-suggest-existing-page' => 'Umiiral na pahina',
	'visualeditor-linkinspector-suggest-new-page' => 'Bagong pahina',
	'visualeditor-linkinspector-suggest-external-link' => 'Kawing sa Web',
	'visualeditor-formatdropdown-title' => 'Baguhin ang anyo',
	'visualeditor-formatdropdown-format-paragraph' => 'Talata',
	'visualeditor-formatdropdown-format-heading1' => 'Pamuhatan 1',
	'visualeditor-formatdropdown-format-heading2' => 'Pamuhatan 2',
	'visualeditor-formatdropdown-format-heading3' => 'Pamuhatan 3',
	'visualeditor-formatdropdown-format-heading4' => 'Pamuhatan 4',
	'visualeditor-formatdropdown-format-heading5' => 'Pamuhatan 5',
	'visualeditor-formatdropdown-format-heading6' => 'Pamuhatan 6',
	'visualeditor-formatdropdown-format-preformatted' => 'May paunang kaanyuan',
	'visualeditor-annotationbutton-bold-tooltip' => 'Makapal', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Nakapahilis', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Kawing', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Dagdagan ang pagkakayupi', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Bawasan ang pagkakayupi', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Listahang may bilang',
	'visualeditor-listbutton-bullet-tooltip' => 'Listahang napungluan',
	'visualeditor-clearbutton-tooltip' => 'Hawiin ang kaanyuan',
	'visualeditor-historybutton-undo-tooltip' => 'Ibalik sa dati', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Gawing muli', # Fuzzy
	'visualeditor-viewpage-savewarning' => 'Nakakatiyak ka bang nais mong magbalik sa gawi na nakikita na hindi muna nagsasagip?',
	'visualeditor-loadwarning' => 'Kamalian sa pagkakarga ng dato mula sa tagapaghain: $1. Nais mo bang subukan ulit?',
	'visualeditor-saveerror' => 'Kamalian sa pagsagip ng dato sa tagapaghain: $1.',
	'visualeditor-editsummary' => 'Ilarawan kung ano ang binago mo',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'visualeditor-savedialog-title-save' => 'ئۆزگەرتىشىڭىزنى ساقلاڭ',
	'visualeditor-savedialog-label-create' => 'بەت قۇر',
	'visualeditor-savedialog-label-save' => 'بەت ساقلا',
	'visualeditor-inspector-title' => 'تەكشۈر',
	'visualeditor-linkinspector-label-pagetitle' => 'بەت ماۋزۇسى',
	'visualeditor-linkinspector-suggest-new-page' => 'يېڭى بەت',
	'visualeditor-formatdropdown-format-paragraph' => 'ئابزاس',
	'visualeditor-formatdropdown-format-heading1' => 'ماۋزۇ 1',
	'visualeditor-formatdropdown-format-heading2' => 'ماۋزۇ 2',
	'visualeditor-formatdropdown-format-heading3' => 'ماۋزۇ 3',
	'visualeditor-formatdropdown-format-heading4' => 'ماۋزۇ 4',
	'visualeditor-formatdropdown-format-heading5' => 'ماۋزۇ 5',
	'visualeditor-formatdropdown-format-heading6' => 'ماۋزۇ 6',
	'visualeditor-annotationbutton-bold-tooltip' => 'توم', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'يانتۇ', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'ئۇلانما', # Fuzzy
	'visualeditor-historybutton-undo-tooltip' => 'يېنىۋال', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'قايتىلا', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'ياپ',
	'visualeditor-inspector-remove-tooltip' => 'چىقىرىۋەت',
);

/** Ukrainian (українська)
 * @author AS
 * @author Base
 * @author Steve.rusyn
 */
$messages['uk'] = array(
	'visualeditor' => 'VisualEditor',
	'visualeditor-desc' => 'Візуальний редактор для MediaWiki',
	'visualeditor-preference-enable' => 'Вмикає візуальний редактор (лише у [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|основному просторі назв]] та[[{{MediaWiki:Visualeditor-usernamespacepagelink}}|просторі назв користувача]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Основний простір назв',
	'visualeditor-usernamespacepagelink' => 'Project:Простір назв користувача',
	'visualeditor-notification-saved' => 'Ваші зміни до $1 було збережено.',
	'visualeditor-notification-created' => '$1 було створено.',
	'visualeditor-notification-restored' => '«$1» відновлено.',
	'visualeditor-notification-reported' => 'Про Вашу проблему було повідомлено. Дякуємо.',
	'visualeditor-ca-editsource' => 'Редагувати вихідний текст',
	'visualeditor-ca-ve-edit' => 'VisualEditor',
	'visualeditor-ca-ve-create' => 'VisualEditor',
	'visualeditor-toolbar-savedialog' => 'Перевірка та збереження',
	'visualeditor-savedialog-title-review' => 'Перевірте Ваші зміни',
	'visualeditor-savedialog-title-report' => 'Повідомити про проблему',
	'visualeditor-savedialog-title-save' => 'Зберегти зміни',
	'visualeditor-savedialog-label-review-wrong' => 'Щось не так',
	'visualeditor-savedialog-label-review-good' => 'Як на мене, виглядає добре',
	'visualeditor-savedialog-label-report' => 'Повідомити про проблему',
	'visualeditor-savedialog-label-create' => 'Створити сторінку',
	'visualeditor-savedialog-label-save' => 'Зберегти сторінку',
	'visualeditor-savedialog-label-restore' => 'Відновити',
	'visualeditor-editnotices-tool' => '$1 {{PLURAL:$1|сповіщення|сповіщення|сповіщень}}',
	'visualeditor-feedback-tool' => 'Залишити відгук',
	'tooltip-ca-ve-edit' => 'Редагувати сторінку у візуальному редакторі',
	'visualeditor-inspector-title' => 'Перевірити',
	'visualeditor-linkinspector-title' => 'Гіперпосилання',
	'visualeditor-linkinspector-label-pagetitle' => 'Назва сторінки',
	'visualeditor-linkinspector-suggest-existing-page' => 'Існуюча сторінка',
	'visualeditor-linkinspector-suggest-new-page' => 'Нова сторінка',
	'visualeditor-linkinspector-suggest-external-link' => 'Веб-посилання',
	'visualeditor-formatdropdown-title' => 'Змінити формат',
	'visualeditor-formatdropdown-format-paragraph' => 'Абзац',
	'visualeditor-formatdropdown-format-heading1' => 'Заголовок 1',
	'visualeditor-formatdropdown-format-heading2' => 'Заголовок 2',
	'visualeditor-formatdropdown-format-heading3' => 'Заголовок 3',
	'visualeditor-formatdropdown-format-heading4' => 'Заголовок 4',
	'visualeditor-formatdropdown-format-heading5' => 'Заголовок 5',
	'visualeditor-formatdropdown-format-heading6' => 'Заголовок 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Переформатований',
	'visualeditor-annotationbutton-bold-tooltip' => 'Жирний', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => 'Курсив', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => 'Посилання', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => 'Збільшити відступ', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => 'Зменшити відступ', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => 'Нумерований список',
	'visualeditor-listbutton-bullet-tooltip' => 'Маркований список',
	'visualeditor-clearbutton-tooltip' => 'Очистити форматування',
	'visualeditor-historybutton-undo-tooltip' => 'Скасувати', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => 'Повернути', # Fuzzy
	'visualeditor-inspector-close-tooltip' => 'Закрити',
	'visualeditor-inspector-remove-tooltip' => 'Вилучити',
	'visualeditor-viewpage-savewarning' => 'Ви дійсно хочете повернутися до режиму перегляду без збереження спершу?',
	'visualeditor-loadwarning' => 'Помилка при завантаженні даних із серверу: $1. Спробувати знову?',
	'visualeditor-differror' => 'Помилка при завантаженні даних із серверу: $1.',
	'visualeditor-saveerror' => 'Помилка при збереженні даних на сервер: $1.',
	'visualeditor-editconflict' => 'Ваші зміни не вдалось зберегти через конфлікт редагувань. Чи хочете Ви вирішити конфлікт власноруч?',
	'visualeditor-editsummary' => 'Опишіть Ваші зміни',
	'visualeditor-problem' => 'Опишіть що пішло не так',
	'visualeditor-aliennode-tooltip' => 'Вибачте, цей елемент не може бути редагованим через VisualEditor',
	'tag-visualeditor' => '[[Special:Tags|Теґ]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'tag-visualeditor-description' => 'Редагування зроблено використовуючи [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]',
	'visualeditor-descriptionpagelink' => 'Project:VisualEditor',
	'visualeditor-alphawarning' => 'Ви використовуєте альфа версію [[{{MediaWiki:Visualeditor-descriptionpagelink}}|VisualEditor]]. Вона може бути повільною і робити зміни із помилками — будь ласка, перевіряте кожне редагування, що Ви робите.',
	'visualeditor-report-notice' => 'Я розумію, що натискаючи надіслати я передаю свої зміни і мій відгук, який буде збережено для аналізу. Я погоджуюсь надати відгук згідно з [[{{MediaWiki:Visualeditor-report-link}}|Умовами використання]].',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'visualeditor-ca-editsource' => 'ذریعہ میں ترمیم کریں',
	'visualeditor-linkinspector-title' => 'لنک میں ترمیم کریں', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => 'صفحہ کا عنوان',
	'visualeditor-formatdropdown-title' => 'تبدیلی کی شکل',
	'visualeditor-formatdropdown-format-paragraph' => 'پیرا',
	'visualeditor-listbutton-number-tooltip' => 'نمبر والی فہرست',
	'visualeditor-listbutton-bullet-tooltip' => 'شق کی فہرست',
);

/** Vietnamese (Tiếng Việt)
 * @author Jdforrester
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'visualeditor' => 'Trình soạn thị giác',
	'visualeditor-desc' => 'Trình soạn thị giác MediaWiki',
	'visualeditor-preference-enable' => 'Sử dụng Trình soạn thị giác (chỉ có trong các không gian tên [[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|chính]] và [[{{MediaWiki:Visualeditor-usernamespacepagelink}}|thành viên]])',
	'visualeditor-mainnamespacepagelink' => 'Project:Không gian tên chính',
	'visualeditor-usernamespacepagelink' => 'Project:Trang cá nhân',
	'visualeditor-notification-saved' => 'Đã lưu các thay đổi của bạn tại $1.',
	'visualeditor-notification-created' => 'Đã tạo ra $1.',
	'visualeditor-notification-restored' => '$1 đã được phục hồi.',
	'visualeditor-notification-reported' => 'Đã báo cáo vấn đề của bạn. Cám ơn bạn.',
	'visualeditor-ca-editsource' => 'Sửa đổi mã nguồn',
	'visualeditor-ca-ve-edit' => 'Trình soạn thị giác',
	'visualeditor-ca-ve-create' => 'Trình soạn thị giác',
	'visualeditor-toolbar-savedialog' => 'Xem lại và lưu',
	'visualeditor-savedialog-title-review' => 'Xem lại những thay đổi của bạn',
	'visualeditor-savedialog-title-report' => 'Báo cáo một vấn đề',
	'visualeditor-savedialog-title-save' => 'Lưu lại những thay đổi của bạn',
	'visualeditor-savedialog-label-review-wrong' => 'Không ổn',
	'visualeditor-savedialog-label-review-good' => 'Được',
	'visualeditor-savedialog-label-report' => 'Báo cáo vấn đề',
	'visualeditor-savedialog-label-create' => 'Tạo trang',
	'visualeditor-savedialog-label-save' => 'Lưu trang',
	'visualeditor-savedialog-label-restore' => 'Phục hồi trang',
	'visualeditor-editnotices-tool' => '$1 thông báo',
	'visualeditor-feedback-tool' => 'Gửi phản hồi',
	'tooltip-ca-ve-edit' => 'Sửa đổi trang này dùng Trình soạn thị giác',
	'visualeditor-inspector-title' => 'Kiểm tra',
	'visualeditor-linkinspector-title' => 'Liên kết',
	'visualeditor-linkinspector-label-pagetitle' => 'Tên trang',
	'visualeditor-linkinspector-suggest-existing-page' => 'Trang đã tồn tại',
	'visualeditor-linkinspector-suggest-new-page' => 'Trang mới',
	'visualeditor-linkinspector-suggest-external-link' => 'Liên kết Web',
	'visualeditor-formatdropdown-title' => 'Thay đổi định dạng',
	'visualeditor-formatdropdown-format-paragraph' => 'Đoạn văn',
	'visualeditor-formatdropdown-format-heading1' => 'Đề mục cấp 1',
	'visualeditor-formatdropdown-format-heading2' => 'Đề mục cấp 2',
	'visualeditor-formatdropdown-format-heading3' => 'Đề mục cấp 3',
	'visualeditor-formatdropdown-format-heading4' => 'Đề mục cấp 4',
	'visualeditor-formatdropdown-format-heading5' => 'Đề mục cấp 5',
	'visualeditor-formatdropdown-format-heading6' => 'Đề mục cấp 6',
	'visualeditor-formatdropdown-format-preformatted' => 'Định dạng sẵn',
	'visualeditor-annotationbutton-bold-tooltip' => 'Đậm $1',
	'visualeditor-annotationbutton-bold-tooltip-trigger-mac' => '(⌘B)',
	'visualeditor-annotationbutton-bold-tooltip-trigger-pc' => '(Ctrl+B)',
	'visualeditor-annotationbutton-italic-tooltip' => 'Xiên $1',
	'visualeditor-annotationbutton-italic-tooltip-trigger-mac' => '(⌘I)',
	'visualeditor-annotationbutton-italic-tooltip-trigger-pc' => '(Ctrl+I)',
	'visualeditor-annotationbutton-link-tooltip' => 'Liên kết $1',
	'visualeditor-annotationbutton-link-tooltip-trigger-mac' => '(⌘K)',
	'visualeditor-annotationbutton-link-tooltip-trigger-pc' => '(Ctrl+K)',
	'visualeditor-indentationbutton-indent-tooltip' => 'Tăng lề $1',
	'visualeditor-indentationbutton-indent-tooltip-trigger' => '(Tab)',
	'visualeditor-indentationbutton-outdent-tooltip' => 'Thụt lề $1',
	'visualeditor-indentationbutton-outdent-tooltip-trigger' => '(Shift+Tab)',
	'visualeditor-listbutton-number-tooltip' => 'Danh sách đánh số',
	'visualeditor-listbutton-bullet-tooltip' => 'Danh sách không đánh số',
	'visualeditor-clearbutton-tooltip' => 'Xóa định dạng',
	'visualeditor-historybutton-undo-tooltip' => 'Hoàn tác $1',
	'visualeditor-historybutton-undo-tooltip-trigger-mac' => '(⌘Z)',
	'visualeditor-historybutton-undo-tooltip-trigger-pc' => '(Ctrl+Z)',
	'visualeditor-historybutton-redo-tooltip' => 'Làm lại $1',
	'visualeditor-historybutton-redo-tooltip-trigger-mac' => '(⇧⌘Z)',
	'visualeditor-historybutton-redo-tooltip-trigger-pc' => '(Ctrl+Shift+Z)',
	'visualeditor-inspector-close-tooltip' => 'Đóng',
	'visualeditor-inspector-remove-tooltip' => 'Dời',
	'visualeditor-viewpage-savewarning' => 'Bạn có chắc chắn muốn quay trở về chế độ xem mà không lưu giữ trước tiên?',
	'visualeditor-loadwarning' => 'Lỗi tải dữ liệu từ máy chủ: $1. Bạn có muốn thử lại không?',
	'visualeditor-differror' => 'Lỗi khi tải dữ liệu từ máy chủ: $1.',
	'visualeditor-saveerror' => 'Lỗi khi lưu dữ liệu trên máy chủ: $1.',
	'visualeditor-editconflict' => 'Không thể lưu các thay đổi của bạn do mâu thuẫn sửa đổi. Bạn có muốn giải quyết mâu thuẫn một cách thủ công?',
	'visualeditor-editsummary' => 'Miêu tả các thay đổi của bạn',
	'visualeditor-problem' => 'Hãy miêu tả điều gì không ổn',
	'visualeditor-aliennode-tooltip' => 'Rất tiếc, không thể sửa đổi phần tử này dùng Trình soạn thị giác',
	'tag-visualeditor' => '[[Special:Tags|Thẻ]]: [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Trình soạn thị giác]]',
	'tag-visualeditor-description' => 'Sửa đổi dùng [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Trình soạn thị giác]]',
	'visualeditor-descriptionpagelink' => 'Project:Trình soạn thị giác',
	'visualeditor-alphawarning' => 'Bạn đang sử dụng một phiên bản alpha của [[{{MediaWiki:Visualeditor-descriptionpagelink}}|Trình soạn thị giác]]. Nó có thể chạy chậm và bịa ra những thay đổi không chính xác. Xin hãy kiểm tra mỗi sửa đổi của bạn.',
	'visualeditor-report-notice' => 'Tôi hiểu rằng, bằng cách bấm Gửi, tôi sẽ truyền những thay đổi và thông tin phản hồi của tôi; nó sẽ được lưu trữ để phân tích. Tôi đồng ý cho thông tin phản hồi theo các [[{{MediaWiki:Visualeditor-report-link}}|Điều khoản sử dụng]].',
	'visualeditor-report-link' => 'Foundation:Terms of Use/vi',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Liangent
 * @author Shirayuki
 * @author Shizhao
 */
$messages['zh-hans'] = array(
	'visualeditor' => '可视化编辑器',
	'visualeditor-desc' => 'MediaWiki的可视化编辑器',
	'visualeditor-preference-enable' => '启用可视化编辑器（仅在[[{{MediaWiki:Visualeditor-mainnamespacepagelink}}|主]]和[[{{MediaWiki:Visualeditor-usernamespacepagelink}}|用户]]名字空间）',
	'visualeditor-mainnamespacepagelink' => 'Project:主名字空间',
	'visualeditor-usernamespacepagelink' => 'Project:用户名字空间',
	'visualeditor-notification-saved' => '您对$1的更改已保存。',
	'visualeditor-notification-created' => '$1已创建。',
	'visualeditor-notification-restored' => '$1已恢复。',
	'visualeditor-notification-reported' => '您的问题已经报告。谢谢您。',
	'visualeditor-ca-editsource' => '编辑源代码',
	'visualeditor-ca-ve-edit' => '可视化编辑器',
	'visualeditor-ca-ve-create' => '可视化编辑器',
	'visualeditor-toolbar-savedialog' => '复查并保存',
	'visualeditor-savedialog-title-review' => '复查您的更高',
	'visualeditor-savedialog-title-report' => '报告问题',
	'visualeditor-savedialog-title-save' => '保存您的更高',
	'visualeditor-savedialog-label-review-wrong' => '一些地方有问题',
	'visualeditor-savedialog-label-review-good' => '看起来很好',
	'visualeditor-savedialog-label-report' => '报告问题',
	'visualeditor-savedialog-label-create' => '创建页面',
	'visualeditor-savedialog-label-save' => '保存页面',
	'visualeditor-savedialog-label-restore' => '恢复页面',
	'visualeditor-editnotices-tool' => '$1条通知',
	'visualeditor-feedback-tool' => '留下反馈',
	'tooltip-ca-ve-edit' => '使用可视化编辑器编辑此页面',
	'visualeditor-inspector-title' => '检查',
	'visualeditor-linkinspector-title' => '超链接',
	'visualeditor-linkinspector-label-pagetitle' => '页面标题',
	'visualeditor-linkinspector-suggest-existing-page' => '现有页面',
	'visualeditor-linkinspector-suggest-new-page' => '新页面',
	'visualeditor-linkinspector-suggest-external-link' => 'Web链接',
	'visualeditor-formatdropdown-title' => '更改格式',
	'visualeditor-formatdropdown-format-paragraph' => '段落',
	'visualeditor-formatdropdown-format-heading1' => '标题1',
	'visualeditor-formatdropdown-format-heading2' => '标题2',
	'visualeditor-formatdropdown-format-heading3' => '标题3',
	'visualeditor-formatdropdown-format-heading4' => '标题4',
	'visualeditor-formatdropdown-format-heading5' => '标题5',
	'visualeditor-formatdropdown-format-heading6' => '标题6',
	'visualeditor-formatdropdown-format-preformatted' => '预格式化文本',
	'visualeditor-annotationbutton-bold-tooltip' => '粗体', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => '斜体', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => '链接', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => '增加缩进', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => '减少缩进', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => '有序列表',
	'visualeditor-listbutton-bullet-tooltip' => '无序列表',
	'visualeditor-clearbutton-tooltip' => '清除格式',
	'visualeditor-historybutton-undo-tooltip' => '撤销', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => '重做', # Fuzzy
	'visualeditor-inspector-close-tooltip' => '关闭',
	'visualeditor-inspector-remove-tooltip' => '移除',
	'visualeditor-viewpage-savewarning' => '您确实要不保存而回到查看模式吗？',
	'visualeditor-loadwarning' => '从服务器载入数据错误：$1。您想重试吗？',
	'visualeditor-differror' => '从服务器载入数据时出现错误：$1。',
	'visualeditor-saveerror' => '向服务器保存数据错误：$1。',
	'visualeditor-editconflict' => '由于编辑冲突，无法保存您的更改。你想要手动解决冲突吗？',
	'visualeditor-editsummary' => '描述您的更改',
	'visualeditor-problem' => '描述发生了什么问题',
	'visualeditor-aliennode-tooltip' => '抱歉，此元素无法使用可视化编辑器编辑',
	'tag-visualeditor' => '[[Special:Tags|标签]]：[[{{MediaWiki:Visualeditor-descriptionpagelink}}|可视化编辑器]]',
	'tag-visualeditor-description' => '使用[[{{MediaWiki:Visualeditor-descriptionpagelink}}|可视化编辑器]]进行的编辑',
	'visualeditor-descriptionpagelink' => 'Project:可视化编辑器',
	'visualeditor-alphawarning' => '您正在使用alpha版本的[[{{MediaWiki:Visualeditor-descriptionpagelink}}|可视化编辑器]]。它可能会很慢，并制造错误的更改 - 请检查每个您所做的编辑。',
	'visualeditor-report-notice' => '我理解通过按下提交按钮，我将传送我的更改和我的反馈，它们将被储存以供分析。我同意按照[[{{MediaWiki:Visualeditor-report-link}}|使用条款]]提供反馈内容。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Shirayuki
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'visualeditor' => '可視化編輯器',
	'visualeditor-desc' => 'MediaWiki的可視化編輯器',
	'visualeditor-mainnamespacepagelink' => 'Project:主名字空間',
	'visualeditor-usernamespacepagelink' => 'Project:用戶名字空間',
	'visualeditor-ca-editsource' => '編輯源代碼',
	'visualeditor-ca-ve-edit' => '可視化編輯器',
	'visualeditor-ca-ve-create' => '可視化編輯器',
	'visualeditor-savedialog-title-report' => '報告問題',
	'visualeditor-savedialog-title-save' => '保存您的修改',
	'visualeditor-savedialog-label-report' => '報告問題',
	'visualeditor-savedialog-label-create' => '建立文章',
	'visualeditor-feedback-tool' => '留下反饋',
	'visualeditor-linkinspector-title' => '編輯鏈接', # Fuzzy
	'visualeditor-linkinspector-label-pagetitle' => '頁面標題',
	'visualeditor-linkinspector-suggest-new-page' => '新頁面',
	'visualeditor-formatdropdown-title' => '更改格式',
	'visualeditor-formatdropdown-format-paragraph' => '段落',
	'visualeditor-formatdropdown-format-heading1' => '標題 1',
	'visualeditor-formatdropdown-format-heading2' => '標題 2',
	'visualeditor-formatdropdown-format-heading3' => '標題 3',
	'visualeditor-formatdropdown-format-heading4' => '標題 4',
	'visualeditor-formatdropdown-format-heading5' => '標題 5',
	'visualeditor-formatdropdown-format-heading6' => '標題 6',
	'visualeditor-formatdropdown-format-preformatted' => '預格式化文本',
	'visualeditor-annotationbutton-bold-tooltip' => '粗體', # Fuzzy
	'visualeditor-annotationbutton-italic-tooltip' => '斜體', # Fuzzy
	'visualeditor-annotationbutton-link-tooltip' => '連結', # Fuzzy
	'visualeditor-indentationbutton-indent-tooltip' => '增加縮進', # Fuzzy
	'visualeditor-indentationbutton-outdent-tooltip' => '減少縮進', # Fuzzy
	'visualeditor-listbutton-number-tooltip' => '有序列表',
	'visualeditor-listbutton-bullet-tooltip' => '無序列表',
	'visualeditor-clearbutton-tooltip' => '清除格式',
	'visualeditor-historybutton-undo-tooltip' => '撤銷', # Fuzzy
	'visualeditor-historybutton-redo-tooltip' => '重做', # Fuzzy
	'visualeditor-inspector-close-tooltip' => '關閉',
	'visualeditor-inspector-remove-tooltip' => '移除',
	'visualeditor-viewpage-savewarning' => '您確實要不保存而回到查看模式嗎？',
	'visualeditor-loadwarning' => '從服務器載入數據錯誤：$1。您想重試嗎？',
	'visualeditor-saveerror' => '向服務器保存數據錯誤：$1。',
	'tag-visualeditor' => '[[Special:Tags|標籤]]：[[{{MediaWiki:Visualeditor-descriptionpagelink}}|可視化編輯器]]',
	'visualeditor-descriptionpagelink' => 'Project:可視化編輯器',
);
