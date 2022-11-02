#include<windows.h>
#include<math.h>
#include<GL/glut.h>

void myInit()
{
    glClearColor(1.0,1.0,1.0,1.0);
    glColor3f(0.0f,0.0f,0.0f);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0,640.0,0.0,480.0);
}

void myDisplay()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(2.0);

    GLint x,y,x1=50,x2=100,y1=100,y2=200;
    GLint dx,dy,inc1,inc2,d;

    x=x1;
    y=y1;
    dx=x2-x1;
    dy=y2-y1;
    inc1=2*dy;
    inc2=2*(dy-dx);
    d=inc1-dx;

    while(x<=x2)
    {
        glBegin(GL_POINTS);
        {
            glVertex2i(x,y);
        }
        glEnd();
        x++;
        if(d<0)
            d=d+inc1;
        else
        {
            d=d+inc2;
            y++;
        }
    }

    glFlush();
}

int main(int argc,char** argv)
{
    glutInit(&argc,argv);
    glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
    glutInitWindowSize(640,480);
    glutInitWindowPosition(100,150);
    glutCreateWindow("Line draw using line equation\n");
    glutDisplayFunc(myDisplay);
    myInit();
    glutMainLoop();
    return 1;
}
