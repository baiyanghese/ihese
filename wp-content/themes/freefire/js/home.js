var canvas = document.getElementById("blogbg"),
context = canvas.getContext('2d'),
BallArray = [];
//
function Resizewin() {
    $(window).resize(function() {
        BallArray = [];
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
}
//
function Init() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    for (var x = 0; x < 100; x++) {
        BallArray.push(new Dot());
    }
    Update();
}
//
function Update() {
    if (BallArray.length < 100) {
        for (var x = BallArray.length; x < 100; x++) {
            BallArray.push(new Dot());
        }
    }

    BallArray.forEach(function(dot) {
        dot.Update();
    });

    BallArray = BallArray.filter(function(dot) {
        return dot.alive;
    });

    Draw();

    requestAnimationFrame(Update);
}
//
function Draw() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    BallArray.forEach(function(dot) {
        dot.Draw();
    });
}

function Dot() {
    this.alive = true;
    this.x = Math.round(Math.random() * canvas.width);
    this.y = Math.round(Math.random() * canvas.height);
    this.diameter = Math.random() * 3;
    this.colorIndex = Math.round(Math.random() * 4);
    this.colorArray = ['rgba(128,255,229,', 'rgba(255,189,127,', 'rgba(255,141,147,', 'rgba(117,159,232,','rgba(173,255,128,'];
    this.alpha = 0.1;
    this.color = this.colorArray[this.colorIndex] + this.alpha + ')';

    this.velocity = {
        x: Math.round(Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.7,
        y: Math.round(Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.7
    };
}

Dot.prototype = {
    Draw: function() {
        context.beginPath();
        context.arc(this.x, this.y, this.diameter, 0, Math.PI * 2, true);
        context.closePath();
        context.fillStyle = this.color;
        context.fill();
    },

    Update: function() {
        if (this.alpha < 0.5) {
            // console.log(this.color);
            this.alpha += 0.01;
            this.color = this.colorArray[this.colorIndex] + this.alpha + ')';
            // console.log('===' + this.color);
        }

        this.x += this.velocity.x;
        this.y += this.velocity.y;

        if (this.x > canvas.width + 5 || this.x < 0 - 5 || this.y > canvas.height + 5 || this.y < 0 - 5) {
            this.alive = false;
        }
    }
}

Resizewin();
Init();
