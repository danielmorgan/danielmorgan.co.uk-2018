npm run production
git add -f build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages

