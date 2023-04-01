import { __ } from '@wordpress/i18n';
import { InspectorControls, BlockControls, MediaPlaceholder, useBlockProps, RichText, MediaReplaceFlow } from '@wordpress/block-editor';
import './editor.scss';
import { TextControl, Card, CardBody, CardMedia } from '@wordpress/components';

export default function Edit( { attributes, setAttributes } ) {
	const setImageAttributes = (media) => {
		if (!media || !media.url) {
			setAttributes({
				imageUrl: null,
				imageId: null,
				imageAlt: null,
			});
			return;
		}
		setAttributes({
			imageUrl: media.url,
			imageId: media.id,
			imageAlt: media?.alt,
		});
	};
	const onChangeTitle = ( newContent ) => {
		setAttributes( { titleContent: newContent } )
	}

	const onChangeSubTitle = ( newContent ) => {
		setAttributes( { subTitleContent: newContent } )
	}

	const onChangeContent = ( newContent ) => {
		setAttributes( { descriptionContent: newContent } )
	}
	return (
		<div { ...useBlockProps() }>
			<div class="is-layout-flex wp-container-11 wp-block-columns">
				<div class="is-layout-flow wp-block-column">
					<RichText
						{ ...useBlockProps }
						tagName="h1"
						onChange={ onChangeTitle }
						allowedFormats={ [ 'core/bold', 'core/italic' ] }
						value={ attributes.titleContent }
						placeholder={ __( 'Digite o título aqui...' ) }
					/>
					<RichText
						{ ...useBlockProps }
						tagName="p"
						onChange={ onChangeSubTitle }
						allowedFormats={ [ 'core/bold', 'core/italic' ] }
						value={ attributes.subTitleContent }
						placeholder={ __( 'Digite o subtítulo aqui...' ) }
					/>
				</div>

				<div class="is-layout-flow wp-block-column">
					<RichText
						{ ...useBlockProps }
						tagName="p"
						onChange={ onChangeContent }
						allowedFormats={ [ 'core/bold', 'core/italic' ] }
						value={ attributes.descriptionContent }
						placeholder={ __( 'Digite o texto aqui...' ) }
					/>
				</div>
			</div>

		</div>

	);
}
