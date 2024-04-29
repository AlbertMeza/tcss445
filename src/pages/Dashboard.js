import RecipeCard from "../components/RecipeCard";
const Dashboard = () => {
    const recipes = [
        {
            name: "Mango Smoothie",
            color: "green",
            calories: 350,
            mealType: "Breakfast",
            image: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.rawpixel.com%2Fsearch%2Fmango%2520smoothie&psig=AOvVaw0XJgkiXmg5Rcqrs2ht9P-i&ust=1714518894669000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNCtguHG6IUDFQAAAAAdAAAAABAE",
            date: "04-29-2024",
        },
        {
            name: "Sushi",
            color: "blue",
            calories: 650,
            mealType: "Lunch",
            image: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vecteezy.com%2Ffree-png%2Fsushi-png&psig=AOvVaw05u6DleG0HywBsbAwOk8VN&ust=1714517479980000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLjij73B6IUDFQAAAAAdAAAAABAE",
            date: "04-29-2024",
        },
    ]

    const mealTypes = [
        ...new Set(recipes?.map(({ mealType }) => mealType)),
    ]
    return (
        <div className="dashboard">
            <h1>My Recipes</h1>
            <div className="recipe-container">
                {recipes &&
                     mealTypes?.map((mealType, categoryIndex) => (
                        <div key={categoryIndex}>
                            <h3>{mealType}</h3>
                            {recipes
                                .filter((recipe) => recipe.mealType === mealType)
                                .map((filteredRecipe, _index) => (
                                    <RecipeCard
                                        id={_index}
                                        color={filteredRecipe.color}
                                        recipe={filteredRecipe}
                                    />
                                ))}
                        </div>
                    ))}
            </div>
        </div>
    )
}

export default Dashboard