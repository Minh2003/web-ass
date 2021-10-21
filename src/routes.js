import AdminPage from './pages/AdminPage';
import BlogPage from './pages/BlogPage';
import BlogDetailPage from './pages/BlogDetailPage';
import HomePage from './pages/HomePage';

const routes = [
  { path: '/', name: 'homePage', component: HomePage },
  { path: '/admin', name: 'adminPage', component: AdminPage },
  { path: '/blog/:id', name: 'blogDetail', component: BlogDetailPage },
  { path: '/blog', name: 'blog', component: BlogPage },
]

export default routes;