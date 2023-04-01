import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	return (
		<div { ...blockProps }>
			<div class="is-layout-flex wp-container-3 wp-block-columns">
				<div class="is-layout-flow wp-block-column">
					<h1>{attributes.titleContent}</h1>
					<p>{attributes.subTitleContent}</p>
				</div>
				<div class="is-layout-flow wp-block-column">
					<RichText.Content tagName="p" value={ attributes.descriptionContent } />

				</div>
			</div>
		</div>
	);
}
