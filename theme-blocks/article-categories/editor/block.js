import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
 
const blockStyle = {
    backgroundColor: '#900',
    color: '#fff',
    padding: '20px',
};
 
registerBlockType( 
    'wsuwp/article-categories', 
    {
        apiVersion: 2,
        title: 'Article Categories',
        icon: 'universal-access-alt',
        category: 'wsuwp-templates',
        example: {},
        edit() {
            const blockProps = useBlockProps( { style: blockStyle } );
    
            return (
                <div { ...blockProps }>Hello World (from the editor).</div>
            );
        },
    }
);