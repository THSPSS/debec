
let instaToken = "IGQVJVYm9oWW85SWFyclB6VDlmVFRRclljTTlrOU03a01XbEUwcjMxODE2VmdELTBxSEVTbGJqSG1lZAjZArdUhxbGhTenNQcG9sUWh1MXlXSDAtaGE1ZAUZAOWmFsTzRtU2JZAOVVpYnNiZADVQVTE1dWczMgZDZD"

var feed = new Instafeed({
accessToken: instaToken,
/* accessToken 뒤에 다양한 키를 추가하여 커스터마이징 가능 */
limit:4,
});
feed.run();


