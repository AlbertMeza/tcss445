import CalorieDisplay from "./CalorieDisplay";
import { Link } from 'react-router-dom';
import ImageDisplay from "./ImageDisplay";
import IngredientBar from "./IngredientBar";
import DeleteBlock from "./DeleteBlock";

const RecipeCard = ({ color, recipe }) => {
    return (
        <div className="recipe-card">
            <Link to={'/recipe/${recipe.recipeID}'} id="link">
                <div className="recipe-color"></div>
                <h4>{recipe.name}</h4>
                <CalorieDisplay/>
                <ImageDisplay/>
                <IngredientBar/>
                <DeleteBlock/>
            </Link>
        </div>
    )
}

export default RecipeCard