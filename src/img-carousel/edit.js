/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

const ALLOWED_MEDIA_TYPES = [ 'image' ];

export default function Edit({ attributes, setAttributes }) {
	const { images } = attributes;

	const onSelectImages = (newImages) => {
		const formatted = newImages.map((img) => ({
			id: img.id,
			url: img.url,
		}));

		setAttributes({images: formatted});
	};

	const handleRemoveImage = (index) => {
		const newImages = [...images];
		newImages.splice(index, 1);
		setAttributes({images: newImages});
	};

	return (
		<div { ...useBlockProps() }>
			<MediaUploadCheck>
				<MediaUpload
					title={ __('Galleries', 'supersenang-theme') }
					allowedTypes={ ALLOWED_MEDIA_TYPES }
					value={ images.length > 0 ?
						images.map((img) => img.id) :
						['']
					}
					onSelect={onSelectImages}
					multiple
					gallery
					addToGallery
					render={({ open }) => (
						<Button onClick={open} variant='primary'>
							{images.length > 0 ? 'Edit Gallery' : 'Add Gallery'}
						</Button>
					)}
				/>
			</MediaUploadCheck>
			{images.length > 0 && (
				<div className="ss-gallery-preview">
					{images.map((img) => (
						<img
							key={img.id}
							src={img.url}
							alt={img.alt || ''}
							style={{ width: '100px', marginRight: '10px' }}
						/>
					))}
				</div>
			)}
		</div>
	);
}
