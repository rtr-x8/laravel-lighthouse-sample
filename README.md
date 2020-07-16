# h1

## start

```bash
gti clone 
cd 
docker-compose up -d 
docker-compose exec myapp php artisan migtrate
docker-compose exec myapp npm run dev
```

[graphql-playground](http://localhost:3000/graphql-playground)


get

```graphql
{
  posts {
    title
    author {
      email
      id
    }
  }
  usersByPaginate(first: 5) {
    data {
      id
      name
    }
    paginatorInfo {
      currentPage
      lastPage
    }
  }
  users {
    email
  }
  
  user(id: 1) {
    id
    name
    email
    posts {
      id
      title
    }
  }
}{
  posts {
    title
    author {
      email
      id
    }
  }
  usersByPaginate(first: 5) {
    data {
      id
      name
    }
    paginatorInfo {
      currentPage
      lastPage
    }
  }
  users {
    email
  }
  
  user(id: 1) {
    id
    name
    email
    posts {
      id
      title
    }
  }
}
```

post
```graphql
mutation {
  createPost(title: "title is here", user_id: 2) {
    id
    title
    author {
      id
      name
    }
  }
}
```

