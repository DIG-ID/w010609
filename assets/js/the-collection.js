document.addEventListener("DOMContentLoaded", () => {
    // Wait until all resources are loaded
    window.addEventListener("load", () => {
        // Check if the body has the class 'post-type-archive-the-collection'
        if (document.body.classList.contains('post-type-archive-the-collection')) {
            const collectionItems = document.querySelectorAll('.collection__item:not(.custom-element)');
            const titleContainers = document.querySelectorAll('.dynamic-title-container');

            // Show the first title container by default
            if (titleContainers.length > 0) {
                titleContainers[0].classList.remove('hidden');
            }

            collectionItems.forEach((item, index) => {
                const link = item.querySelector('a');

                if (link) {
                    link.addEventListener('mouseenter', () => {
                        titleContainers.forEach(title => title.classList.add('hidden'));
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

                container.addEventListener('mouseenter', () => {
                    firstImage.classList.add('hidden');
                    secondImage.classList.remove('hidden');
                    plusInfo.classList.remove('hidden');
                });

                container.addEventListener('mouseleave', () => {
                    firstImage.classList.remove('hidden');
                    secondImage.classList.add('hidden');
                    plusInfo.classList.add('hidden');
                });
            });
        }
    });
});
