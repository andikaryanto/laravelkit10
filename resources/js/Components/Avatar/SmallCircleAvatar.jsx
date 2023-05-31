import React from 'react';

const SmallCircleAvatar = ({ imageUrl, altText }) => {
    return (
        <div className="w-10 h-10 rounded-full overflow-hidden">
            <img src={imageUrl} alt={altText} className="w-full h-full object-cover" />
        </div>
    );
};

export default SmallCircleAvatar;
