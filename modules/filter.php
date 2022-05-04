<div class="filter">
    <div class="filter-wrapper">
        <div class="filter-title">
            <h3>Фильтры</h3>
        </div>
        <div class="filter-items">
            <div class="range">
                <div class="range-text">Стоимость</div>

                <div class="range-output">
                    <input type="text" class="range-output__input" id="minPrice" />
                    <input type="text" class="range-output__input" id="maxPrice" />
                </div>

                <div class="range-control">
                    <input type="range" id="minPriceControl" value="36" step="0.0001" min="0" max="100" class="range-contol" />

                    <input type="range" id="maxPriceControl" value="75" step="0.0001" min="0" max="100" class="range-contol" />

                    <div class="color-block"></div>
                </div>
            </div>
            <hr>
            <div class="people">
                <div class="range-text">
                    Количество человек
                </div>
                <div class="people-count-block">
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="Rainbow Dash"><label for="checkboxOne">1 чел.</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="Cotton Candy"><label for="checkboxTwo">2 чел.</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="Rarity"><label for="checkboxThree">3 чел.</label></li>
                        <li><input type="checkbox" id="checkboxFour" value="Moondancer"><label for="checkboxFour">4 чел.</label></li>
                        <li><input type="checkbox" id="checkboxFive" value="Surprise"><label for="checkboxFive">5 чел.</label></li>
                        <li><input type="checkbox" id="checkboxSix" value="Twilight Sparkle" checked><label for="checkboxSix">6 чел.</label></li>
                        <li><input type="checkbox" id="checkboxSeven" value="Fluttershy"><label for="checkboxSeven">7 чел.</label></li>
                        <li><input type="checkbox" id="checkboxEight" value="Derpy Hooves"><label for="checkboxEight">8 чел.</label></li>
                        <li><input type="checkbox" id="checkboxNine" value="Princess Celestia"><label for="checkboxNine">9 чел.</label></li>
                        <li><input type="checkbox" id="checkboxTen" value="Gusty"><label for="checkboxTen">10+ чел.</label></li>

                    </ul>

                </div>
            </div>

            <hr>

            <div class="place">
                <div class="range-text">
                    Место
                </div>

                <ul class="place-items">
                    <li class="place-item">
                        <label class="place-name">
                            <input type="radio" name="place" id="place1">
                            <span>Норвегия</span>
                        </label>
                    </li>
                    <li class="place-item">
                        <label class="place-name">
                            <input type="radio" name="place" id="place2">
                            <span>Ямайка</span>
                        </label>
                    </li>
                    <li class="place-item">
                        <label class="place-name">
                            <input type="radio" checked name="place" id="place3">
                            <span>Турция</span>
                        </label>
                    </li>
                    <li class="place-item">
                        <label class="place-name">
                            <input type="radio" name="place" id="place5">
                            <span>Куба</span>
                        </label>
                    </li>
                    <li class="place-item">
                        <label class="place-name">
                            <input type="radio" name="place" id="place5">
                            <span>Япония</span>
                        </label>
                    </li>
                </ul>
            </div>

            <a href="#" class="btn">
                Показать
            </a>
        </div>
    </div>
</div>