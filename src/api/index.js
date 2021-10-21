import axios from 'axios'

const url = '127.0.0.1'

export const getAllBlogs = () => axios.get(url)