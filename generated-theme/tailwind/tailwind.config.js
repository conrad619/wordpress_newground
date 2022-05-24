// Set flag to include Preflight conditionally based on the build target.
const includePreflight = ( 'editor' === process.env._TW_TARGET ) ? false : true;

module.exports = {
	mode: 'jit',
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				color: {
					1: '#7BF7F6',
					2: '#91EE9E',
					3: '#A6EC8B',
					4: '#ECDF65',
				},
			},
			fontSize: {
				d0: [ '1em', { //16
					lineHeight: '1.5',
				} ],
				d1: [ '0.75em', { //12
					lineHeight: '1.5',
				} ],
				d2: [ '1.5em', { //24
					lineHeight: '1.5',
				} ],
				d3: [ '1.75em', { //28
					lineHeight: '1.5',
				} ],
				d4: [ '2.25em', { //36
					lineHeight: '1.5',
				} ],
				d5: [ '3em', { //48
					lineHeight: '1.5',
				} ],
			},
		},
		screens: {
			sm: '426px',
			md: '769px',
			lg: '1025px',
		},
		fontFamily: {
			sans: [ 'degular', 'Helvetica', 'Arial', 'sans-serif' ],
			serif: [ 'Freeserif' ],
			body: [ 'degular' ],
			head: [ 'Oswald' ],
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography.
		require( '@tailwindcss/typography' ),

		// Extract colors and widths from `theme.json`.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/line-clamp' ),
	],
};
