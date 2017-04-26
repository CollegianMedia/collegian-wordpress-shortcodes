# Collegian WordPress Shorcodes
A WordPress plugin for custom shortcodes for the Collegian website.


# Horoscope Shortcodes

### [horoscopes]
This shortcode creates a block of the zodiac signs that can be clicked to jump to a specific horoscope.

### [libra] (or any other zodiac sign)
This shortcode creates a title for that zodiac section. It will display the zodiac sign, its name, and the date range for that horoscope. You do **not** have to use a closing shortcode like [/libra].

### Example

```
[horoscopes]
[libra]Some text for Libra
[scorpio]Some text for Scorpio
...
```
![Horoscopes Example](/screenshots/horoscopes.png)

# Bowl Game Shortcodes

### [bowlad]
This shortcode creates a DoubleClick ad spot for bowl content. You set the ad in DoubleClick.

##### Note:
If the ad slot changes on DoubleClick, the ad code **must** be updated for it to work.

##### Example:
```
[bowlad]
```

![Bowl Ad Example](/screenshots/bowlad.png)

### [bowllogomenu]
This shortcode is meant to be used in a menu, and displays the logo for the bowl game menu.

##### Note:
The logo **must** be updated each year.


# Miscellaneous Shortcodes

### [retake]
This shortcode creates a button with the text "Retake Quiz" that reloads the page. It is intended to be used on quiz articles.

#### Example:
```
[retake]
```
![Retake Example](/screenshots/retake.png)

### [related]
This shortcode creates a small box that text will wrap around. The box will show a title with a link and arrow. It is intended to be used in articles to link to other relevant articles.

#### Parameters
##### title
This is the title that will be displayed.
##### url
This is the url that the title and arrow will link to.


#### Example
```
[related title="This is an example" url="http://www.example.com"]
```
![Related Example](/screenshots/related.png)

### [question]
This shortcode displays a question in a fancy format. It is intended for Street Talk articles. It must be closed with a [/question].

#### Example
```
[question]What is an example question?[/question]
```
![Question Example](/screenshots/question.png)

### [right]
This shortcode creates a p tag that is aligned right. It must be closed with a [/right].

#### Example
```
[right]This text would align right.[/right]
```
![Right Example](/screenshots/right.png)

### [quote]
This shortcode makes a fancy pull quote. It must be closed with a [/quote]. Do not include quotation marks, as they will automatically appear.

#### Example
```
[quote]This is a quote somebody said once.[/quote]
```
![Quote Example](/screenshots/quote.png)

### [purchase]
This shortcode will create a button with the text "Purchase a Photo" that will link to a provided link. It is intended to be used on gallery pages to link to that gallery's purchase page.

#### Parameters
##### url
This is the url that the button will link to.

#### Example
```
[purchase url="http://example.com"]
```
![Purchase Example](/screenshots/purchase.png)

### [hideimage]
This shortcode will cause the featured image to not display on this post. It is intended to be used on gallery and video pages, since those posts don't need to display the featured image.

### [editors-note]
This shortcode will create a box with a title of "Editor's Note" and some text. It must be closed with a [/editors-note]

#### Example
```
[editors-note]This is an example of an editor's note.[/editors-note]
```
![Editor's Note Example](/screenshots/editors-note.png)

### [sponsored]
This shortcode will create a box with a title of "Sponsored" and some text. It must be closed with a [/sponsored]. It is intended to be used to provide a link or other text describing a sponsor of the content.

#### Example
```
[sponsored]This is some text about a sponsor.[/sponsored]
```
![Sponsored Example](/screenshots/sponsored.png)

### [gofundmetitleix]
This shortcode was created to embed a GoFundMe button on an article. It is not intended to be re-used
