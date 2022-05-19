function spreadRoutes() {
    const routeList = document.querySelector('.route-row');
    const createdBlock = document.getElementById('createdBlock');
    let totalElemnts = routeList.children.length - 1;



    createdBlock.addEventListener('click', generateBlock);

    function generateBlock() {
        let lastRouteElement = [...routeList.children].at(-1);
        let preparedRoute = document.createElement('div')

        preparedRoute.classList.add('route-col');
        preparedRoute.innerHTML = `
            <div class="route-item">
                <div class="search-input-block flyingBlock">
                    <span class="icon-route"></span>
                    <input type="text" name="route${totalElemnts}-value" class="input-field" placeholder="Route text...">
                </div>

                <label for="route${totalElemnts}-path" class="custom-file-upload">
                    Select image
                </label>
                <input id="route${totalElemnts}-path" type="file" accept=".jpg, .jpeg, .png" />
            </div>`;

        lastRouteElement.before(preparedRoute);
        totalElemnts++;
    }
}
function spreadAdditional() {
    const expenseList = document.querySelector('.expenses-row');
    const createdBlock = document.getElementById('createExpense');
    let totalElemnts = expenseList.children.length - 1;



    createdBlock.addEventListener('click', generateBlock);

    function generateBlock() {
        let lastExpenseElement = [...expenseList.children].at(-1);
        let preparedExpense = document.createElement('div')

        preparedExpense.classList.add('expenses-col');
        preparedExpense.innerHTML = `
            <div class="expenses-item">
                <div class="col-background flyingBlock">
                    <div class="price__item-cost">
                        <span class="icon-coins"></span>
                        <input name="expense${totalElemnts}-value" class="price-control" type="text" placeholder="0">
                    </div>
                    <input name="expense${totalElemnts}-name" class="price__item-age price-control" type="text" placeholder="Car">
                </div>
            </div>`;

        lastExpenseElement.before(preparedExpense);
        totalElemnts++;
    }

}

spreadAdditional();
spreadRoutes();
