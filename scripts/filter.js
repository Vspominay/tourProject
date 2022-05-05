function priceRange(minPrice, maxPrice) {


    const minPrice_range = document.querySelector('#minPriceControl');
    const maxPrice_range = document.querySelector('#maxPriceControl');

    const minPrice_output = document.querySelector('#minPrice');
    const maxPrice_output = document.querySelector('#maxPrice');

    const activeRange = document.querySelector('.color-block');

    function updatePrice(minPrice, maxPrice) {
        let fromValue = Math.floor((maxPrice - minPrice) * minPrice_range.value / 100 + minPrice);
        let toValue = Math.floor((maxPrice - minPrice) * maxPrice_range.value / 100 + minPrice);

        minPrice_output.value = fromValue;
        maxPrice_output.value = toValue;

        controlRange(Math.floor(minPrice_range.value), Math.floor(maxPrice_range.value));
    }
    updatePrice(minPrice, maxPrice);

    function updatePriceFromInput() {
        let valueOutputMin = +minPrice_output.value;
        let valueOutputMax = +maxPrice_output.value;

        if (valueOutputMin < valueOutputMax && valueOutputMax <= maxPrice && valueOutputMin >= minPrice) {
            let fromValue = Math.floor((valueOutputMin - minPrice) * 100 / maxPrice);
            let toValue = Math.floor((valueOutputMax) * 100 / maxPrice);

            minPrice_range.value = fromValue;
            maxPrice_range.value = toValue;

            controlRange(fromValue, toValue);
        }
        else if (valueOutputMax > maxPrice) {
            maxPrice_output.value = maxPrice;
            updatePriceFromInput();
        }
        else if (valueOutputMin < minPrice && valueOutputMin > 100) {
            minPrice_output.value = minPrice;
            updatePriceFromInput();
        }

    }

    function controlRange(fromValue, toValue) {
        activeRange.style.left = fromValue + '%';
        activeRange.style.right = (100 - toValue) + '%';
    }

    maxPrice_range.addEventListener('input', () => {
        let minValue = parseInt(minPrice_range.value)
        let maxValue = parseInt(maxPrice_range.value)

        if (maxValue < minValue + 10) {
            minPrice_range.value = maxValue - 10

            if (minValue === parseInt(minPrice_range.min)) {
                maxPrice_range.value = 10
            }
        }

        updatePrice(minPrice, maxPrice)
    })

    minPrice_range.addEventListener('input', () => {
        let minValue = parseInt(minPrice_range.value)
        let maxValue = parseInt(maxPrice_range.value)

        if (minValue > maxValue - 10) {
            maxPrice_range.value = minValue + 10

            if (maxValue === parseInt(maxPrice_range.max)) {
                minPrice_range.value = parseInt(maxPrice_range.max) - 10
            }
        }

        updatePrice(minPrice, maxPrice)
    })

    const priceInputDebounce = debounce(updatePriceFromInput, 300);

    minPrice_output.addEventListener('input', priceInputDebounce);
    maxPrice_output.addEventListener('input', priceInputDebounce);
}

function debounce(func, ms) {
    let timer;

    return function (...args) {
        const funcCall = () => {
            func.apply(this, ...args);
        }

        clearTimeout(timer);
        timer = setTimeout(funcCall, ms);
    }
}

priceRange(1000, 15000);