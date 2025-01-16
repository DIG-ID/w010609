document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        // Check if the body has the class 'post-type-archive-the-collection'
        if (document.body.classList.contains('post-type-archive-the-collection')) {
            const collectionItems = document.querySelectorAll('.collection__item:not(.custom-element)');
            const titleContainers = document.querySelectorAll('.dynamic-title-container');

            // Ensure all title containers are hidden by default
            titleContainers.forEach(title => title.classList.add('hidden'));

            collectionItems.forEach((item, index) => {
                const link = item.querySelector('a');

                if (link) {
                    link.addEventListener('mouseenter', () => {
                        // Hide all titles
                        titleContainers.forEach(title => title.classList.add('hidden'));

                        // Show the corresponding title
                        const titleToShow = document.querySelector(`.dynamic-title-container[data-title-id="${index + 1}"]`);
                        if (titleToShow) {
                            titleToShow.classList.remove('hidden');
                        }
                    });
                }
            });

            const imageSwapContainers = document.querySelectorAll('.image-swap-container');

            imageSwapContainers.forEach(container => {
                const firstImage = container.querySelector('.first-image');
                const secondImage = container.querySelector('.second-image');
                const plusInfo = container.querySelector('.plusInfo');

                // Ensure the second image and additional info are hidden by default
                if (secondImage) secondImage.classList.add('hidden');
                if (plusInfo) plusInfo.classList.add('hidden');

                container.addEventListener('mouseenter', () => {
                    if (firstImage) firstImage.classList.add('hidden');
                    if (secondImage) secondImage.classList.remove('hidden');
                    if (plusInfo) plusInfo.classList.remove('hidden');
                });

                container.addEventListener('mouseleave', () => {
                    if (firstImage) firstImage.classList.remove('hidden');
                    if (secondImage) secondImage.classList.add('hidden');
                    if (plusInfo) plusInfo.classList.add('hidden');
                });
            });
        }
    });
});
