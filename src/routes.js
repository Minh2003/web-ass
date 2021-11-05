import AdminPage from "./pages/AdminPage";
import BlogPage from "./pages/BlogPage";
import BlogDetailPage from "./pages/BlogDetailPage";
import HomePage from "./pages/HomePage";
import DemoComponent from "./pages/DemoComponent";
import MenuPage from "./pages/MenuPage";

const routes = [
  { path: "/", name: "homePage", component: HomePage },
  { path: "/admin", name: "adminPage", component: AdminPage },
  { path: "/blog/:id", name: "blogDetail", component: BlogDetailPage },
  { path: "/blog", name: "blog", component: BlogPage },
  { path: "/menu", name: "menu", component: MenuPage },
  { path: "/demo", name: "demoComponent", component: DemoComponent },
];

export default routes;
