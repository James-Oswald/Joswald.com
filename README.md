# Jozwald.com
My first personal website from 2016 when I was a sophomore in high school! It was live online from March 2016 - Feb 2017

## Background
While taking honors programming in 10th grade 2015, I decided to branch out and learn some new languages.
I decided to go for javascript since It was the technology that powered the web and I was very interested in websites,
soon I learned that my ISP was offering a free website dynamic website and domain as one of the perks with our package
which I immediately claimed for myself. Soon after I learned PHP solely for the fact that I liked it letting me do code reuse
with HTML. Soon after I decided to learn even more PHP and challenged myself to add a file server page and anonymous chat room.

Over the course of a year I also upload various school projects and used it as a testing ground for various javascript applications
some shown on the navbar and some hidden and only accessible by knowing the link.

## Build
If you have php installed you can see in the /.vscode/launch.json that I have it configured to start php's built in webserver then open in chrome, however you can host this code on any php enabled webserver and it should work. As you might be able to tell from the .htaccess file, the original server was Apache. 

## Disclaimer 

It should be mentioned this site was open to the public for anonymous uploads and posts for 10 months. While I did my best to censor
some of the most obscene things that were said by using mass search and replace functions before uploading this,
It is important to remember that these were 1000s of posts by immature 10th grade boys, and I do not
condone/endorse anything that has been uploaded on this site by its users, and under no circumstances should you vist any weird
looking links you find in the messages. 

## Notes
I know I left some passwords laying around in the PHP code, rookie mistake. However, none of them were serious passwords and
were used for anything outside of this site. No need to notify me if you find them. 

The 404 page is lost forever, I'm not sure why it wasn't in with the backup.  

## Some Screenshots and History

### Home
![Homescreen](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/homescreen.png)
The home screen went through MANY variations over the years. It started with a comedic advert for a friends company that resulted
in a cease and desist with many hurt feelings and potential lawsuits. Eventually after playing around with 3js for a few months
I changed it into its current and final form, a trashy remix of [The 3js Demo "misc_lookat"](https://threejs.org/examples/#misc_lookat),
which at the time was the coolest thing I had ever seen 3js do. 

### C++ Tutorials
The C++ Tutorial series were two HTML pages of condenced Comp Sci notes assigned for the two quarters of C++
my Honors CS class I took in 10th grade, Both are overly extensive and took 10+ hours to write.

### Chat
![Chat](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/chat.png)
The chat page was my first real PHP project and lesson in client server interfacing on dynamic websites. I took inspiration from
4chan's anime board which I frequented throughout highschool.
This feature was undoubtedly a mistake in hindsight. Many many anonymous
users, almost all of them being people from my highschool who passed around the link, posted 1000s of obscene messages. The current
messages archived are the few hundred left after I added the ability to post images. At some point before the image update, 
someone realized I didn't protect against HTML injection in the input field and proceeded to post:
```html
<script>
window.location.href = "http://beesbeesbees.com/";
</script>
```
Which redirected everyone who tried to visit the page to [BeesBeesBees.com](http://beesbeesbees.com/). It was my first and a very valuable lesson in web security, and I
was quickly able to implement a patch.

### File Upload
![File bin](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/filebin.png)
This was my second big PHP project, a place to anonymously upload and download files, taking inspiration from
4chan's flash board. I have no idea what's in the current file bin, I really don't want to know.

### Game of Life
![Game of Life](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/game%20of%20life.png)
This was my first real Javascript application! I remember that had alot of fun integrating the HTML controls with the JS.

### Advocacy Project
![Advocacy Project](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/advoc.png)
This was my final project for my 10th grade health class. Still not entirely sure how Computer Malware had anything to do with health,
but it got a 100 so I must have done something right. 

### LOTF Song
![LOTF Song](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/lotfsong.png)
This was a project for my 10th grade english class, We had to write a song and perform it in front of the class.
I took it a step further. I wrote the song and let the (at the time) new
[SpeechSynthesisUtterance API](https://developer.mozilla.org/en-US/docs/Web/API/SpeechSynthesisUtterance)
sing the song for me, in a robotic voice, while I danced to it. It received a very warm reception by the class. 

### ???
![???](https://github.com/James-Oswald/Jozwald.com/blob/master/screenshots/what.png)
???

