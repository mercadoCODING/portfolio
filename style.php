<style>
<?php $text="Hi, I'm Raphael Andre Mercado";


$animationDuration=strlen($text) * 0.1;

?>
body {
    margin: 0;
}

nav {

    padding: 25px 15px 0 0;
    background-color: rgb(30, 30, 30);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

}

.logo-name-container {
    display: flex;
    justify-content: start;
    margin: 0;
    position: relative;
    top: -10px;
}

.links-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-grow: 1;
}

.icon-wrapper {
    margin-left: 10px;
    background-color: #333;
    padding: 10px;
    border-radius: 15px;
    transition: background-color 0.3s ease;
}

.icon-wrapper a {
    margin-left: 10px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-right: 10px;

}

.icon-wrapper:first-child {
    margin-right: 0px;
}


.icon-wrapper:hover {
    background-color: #555;
}


.icon-wrapper i {
    color: white;
    transition: color 0.3 ease;
}


.icon-wrapper:hover i {
    color: #ccc;
}


.container {
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.content-box1,
.context-box2 {
    flex: 1;
    display: flex;
}

.content-box {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.content-box1 {
    position: relative;
    height: 80vh;
    background-image: url("images/bg.jpg");
    background-size: auto;
    background-repeat: no-repeat;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.content-box1::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 0;
}

.content-box1 .name-text {
    position: relative;
    z-index: 1;
    color: #fff;
    font-size: 2em;
    font-family: "Rockwell Extra Bold", "Rockwell Bold", monospace;
    text-align: center;
    border-right: 5px solid;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    animation: typing <?php echo $animationDuration; ?>s steps(<?php echo strlen($text); ?>) forwards,
    cursor <?php echo $animationDuration;?>s step-end infinite alternate;
}

.content-box1 h3 {
    color: #fff;
    font-size: 1.5em;
    font-family: "Rockwell Extra Bold", "Rockwell Bold", monospace;
    text-align: center;
    margin-top: 20px;
    z-index: 1;
}

@keyframes typing {
    from {
        width: 0;
    }

    to {
        width: 50%;
    }
}

@keyframes cursor {
    0% {
        border-color: transparent;
    }

    50% {
        border-color: transparent;
    }

    100% {
        border-color: transparent;
    }
}


.content-box2 {
    background-color: blue;

}
</style>