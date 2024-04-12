import {BrowserRouter, Route, Routes} from "react-router-dom";
import Dashboard from "./pages/Dashboard";
import RecipePage from "./pages/RecipePage";
import NavBar from "./components/NavBar";

const App = () => {
    return (
        <div className="app">
            <BrowserRouter>
                <NavBar/>
                <Routes>
                    <Route path='/' element={<Dashboard/>}/>
                    <Route path='/recipes' element={<RecipePage/>}/>
                    <Route path='/recipes/:id' element={<RecipePage editMode={true}/>}/>
                </Routes>
            </BrowserRouter>
        </div>
    )
}

export default App;
